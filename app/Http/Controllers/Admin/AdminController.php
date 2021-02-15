<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

class AdminController extends Controller
{
    public function index()
    {
        $totalProducts = Product::all()->count();
        $totalCategories = Category::all()->count();
        // $totalOrders = Product::all()->count();
        return view('admin.main.index', compact('totalProducts', 'totalCategories'));
    }

    public function profile()
    {
        return view('admin.profile.index');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $password = Hash::make($request->passwordNew);

        if (Hash::check($request->password, $user->password)) {
            if ($request->passwordNew != null)
                $user->password = $password;
            $user->save();
            return redirect()->route('mtshop.admin.profile')->withSuccess('Данные админа успешно изменены!');
        } else {
            return back()->withInput()->withErrors('Неправильный пароль!');
        }
    }

    public function integration()
    {
        return view('admin.integration.index');
    }

    public function generateKaspiXml()
    {
        $products = Product::whereHas('attributes', function (Builder $query) {
            $query->where('name', 'бренд');
        })->get();

        $xw = xmlwriter_open_memory();
        xmlwriter_set_indent($xw, 1);
        $res = xmlwriter_set_indent_string($xw, ' ');

        xmlwriter_start_document($xw, '1.0', 'UTF-8');

        // KASPI_CATALOG START
        xmlwriter_start_element($xw, 'kaspi_catalog');

            xmlwriter_start_attribute($xw, 'date');
            xmlwriter_text($xw, 'string');
            xmlwriter_end_attribute($xw);

            xmlwriter_start_attribute($xw, 'xmlns');
            xmlwriter_text($xw, 'kaspiShopping');
            xmlwriter_end_attribute($xw);

            xmlwriter_start_attribute($xw, 'xmlns:xsi');
            xmlwriter_text($xw, 'http://www.w3.org/2001/XMLSchema-instance');
            xmlwriter_end_attribute($xw);

            xmlwriter_start_attribute($xw, 'xsi:schemaLocation');
            xmlwriter_text($xw, 'kaspiShopping http://kaspi.kz/kaspishopping.xsd');
            xmlwriter_end_attribute($xw);

                // COMPANY TAG
                xmlwriter_start_element($xw, 'company');
                xmlwriter_text($xw, 'CompanyName');
                xmlwriter_end_element($xw);

                // MERCHANTID TAG
                xmlwriter_start_element($xw, 'merchantid');
                xmlwriter_text($xw, 'CompanyID');
                xmlwriter_end_element($xw);

                // OFFERS START
                xmlwriter_start_element($xw, 'offers');

                    foreach ($products as $product) {
                        // OFFER START
                        xmlwriter_start_element($xw, 'offer');

                        xmlwriter_start_attribute($xw, 'sku');
                        xmlwriter_text($xw, $product->vcode);
                        xmlwriter_end_attribute($xw);

                            // MODEL TAG
                            xmlwriter_start_element($xw, 'model');
                            xmlwriter_text($xw, $product->name);
                            xmlwriter_end_element($xw);
                            foreach ($product->attributes as $attr) {
                                if ($attr->name == 'Бренд') {
                                    // BRAND TAG
                                    xmlwriter_start_element($xw, 'brand');
                                    xmlwriter_text($xw, $attr->pivot->value);
                                    xmlwriter_end_element($xw);
                                }
                            }

                            // AVAILABILITIES START
                            xmlwriter_start_element($xw, 'availabilities');

                            $available = $product->quantity > 0 ? 'yes' : 'no';

                            // AVAILABILITY TAG
                            xmlwriter_start_element($xw, 'availability');
                            
                                xmlwriter_start_attribute($xw, 'available');
                                xmlwriter_text($xw, $available);
                                xmlwriter_end_attribute($xw);

                                xmlwriter_start_attribute($xw, 'storeId');
                                xmlwriter_text($xw, 'myFavoritePickupPoint1');
                                xmlwriter_end_attribute($xw);

                            // AVAILABILITY TAG END
                            xmlwriter_end_element($xw);

                            // AVAILABILITIES END
                            xmlwriter_end_element($xw);

                            // PRICE TAG
                            xmlwriter_start_element($xw, 'price');
                            xmlwriter_text($xw, $product->price);
                            xmlwriter_end_element($xw);

                        xmlwriter_end_element($xw);
                    }

                // OFFERS END
                xmlwriter_end_element($xw);

        // KASPI_CATALOG END
        xmlwriter_end_element($xw);

        xmlwriter_end_document($xw);

        // $files = Storage::disk('public')->allFiles('assets/admin/xmls');
        // Storage::disk('public')->delete($files);

        // $name = 'xml-kaspi-' . date('d-m-Y-H-i') . '.xml';

        // $path = 'assets/admin/xmls/' . $name;

        // Storage::disk('public')->put($path, xmlwriter_output_memory($xw));

        return response(xmlwriter_output_memory($xw), 200)->header('Content-Type', 'text/xml');

        // echo xmlwriter_output_memory($xw);

        // return Storage::disk('public')->download($path);
    }

    public function generateSatuXml()
    {
        dd(1);
    }
}
