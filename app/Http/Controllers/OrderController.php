<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = collect(session('products'));
        // dd($products);

        $quantity = $request['quantity'];

        foreach ($products as $index => $product) {
            if ($product->quantity < $quantity[$index])
                return back()->withErrors('Некоторые товары отсутствуют на складе!');
        }

        $deliveryType = 1;

        if ($request->city || $request->street || $request->apartment)
            $deliveryType = 2;
        
        $order = new Order;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        if ($request->delivery_price)
            $order->delivery_price = $request->delivery_price;
        $order->city = $request->city;
        $order->street = $request->street;
        $order->apartment = $request->apartment;
        $order->delivery_type = $deliveryType;

        $order->save();

        $productsArray = [];

        foreach ($products as $index => $product) {
            $price = 0;
            if ($product->discount)
                $price = $product->discount_price * $quantity[$index];
            else
                $price = $product->price * $quantity[$index];

            $product->decrement('quantity', $quantity[$index]);

            $productsArray[$product->id] = ['quantity' => $quantity[$index], 'price' => $price];
        }

        $order->products()->sync($productsArray);
        session()->forget('products');

        if ($deliveryType == 1)
            return redirect()->route('mtshop.order.create-payment', ['order' => $order->id]);

        return redirect()->route('mtshop.cart.index', ['#success']);
    }

    // Create payment in Kassa24 and redirect User to it
    public function createPayment(Order $order)
    {
        $amount = 0;
        if ($order->amount)
            $amount = $order->amount;

        $data = array();
        $data["MerchId"] = "12124860231057413";
        $data["callback"] = "https://mtshop.kz/order/success";
        $data["description"] = "Все вопросы можете задавать на интернет-магазине mtshop.kz";
        $data["orderId"] = $order->id;
        $data["returnUrl"] = "https://mtshop.kz/catalogue";
        $data["demo"] = true;
        $data["amount"] = $amount * 100;
        $data["login"] = "12124860231057413";
        $data["pass"] = "123456789123456789123456789123456789";
        if ($order->email)
            $data["email"] = $order->email;
        $data["phone"] = preg_replace('/[^0-9]/', '', $order->phone);

        if($data["amount"]<=0){
            return redirect()->back()->withErrors('цена не указана или меньше 0');
        }

        $dataArray=array(
            "merchantId"=>      strval($data["MerchId"]),
            "callbackUrl"=>     strval($data["callback"]),
            "orderId"   =>      strval($data['orderId']),
            "description"=>     strval($data['description']),
            "demo"      =>      $data['demo']=== 'false'? false: true,
            "returnUrl" =>      strval($data['returnUrl']),
            "amount"  =>        (int)$data["amount"]
        );

        if (isset($data['email'])|| isset($data['phone'])){
            $dataArray['customerData']=array(
                "email"     =>      isset($data['email'])?$data['email']:"",
                "phone"     =>      isset($data['phone'])?$data['phone']:""
            );
        }
        if (isset($data['metadata'])){
            $dataArray["metadata"]=$data['metadata'];
        }

        $data_string = json_encode ($dataArray, JSON_UNESCAPED_UNICODE);
        $curl = curl_init( "https://ecommerce.pult24.kz/payment/create");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        $headers = array(
            "Content-Type: application/json",
            "Authorization: Basic " . base64_encode($data["login"].':'.$data["pass"]),
            'Content-Length: ' . strlen($data_string)
        );
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($curl);
        curl_close($curl);
        $result=json_decode($result);
        $url = $result->url;

        $order->url = $url;
        $order->save();

        return redirect()->to($url);
    }

    // Catch server side Response (accepted or not)
    public function success()
    {
        if ($_SERVER["REMOTE_ADDR"]!="35.157.105.64") {
            echo "noop";
            die();
        }
        $json = json_decode (file_get_contents('php://input'),true);
    	
        $out=true;
        
        if ($json['status']==1){
            $order = Order::find($json['orderId']);
            if ($order) {
                $order->paid = true;
                $order->save();
               file_put_contents("123.txt", "оплата прошла\n", FILE_APPEND | LOCK_EX);
            } else {
                header( 'HTTP/1.1 200 OK' );
            }
        } else {
            header( 'HTTP/1.1 200 OK' );
        }
        header( 'HTTP/1.1 200 OK' );
        if(gettype($out)=="boolean"){
            echo '{"accepted":'.(($out) ? 'true' : 'false').'}';
        }else{
            throw  new  \Exception($out);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
