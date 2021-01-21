<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Measure;
use Illuminate\Http\Request;
use Throwable;

class AdminAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::orderBy('name')->get();
        $measures = Measure::all();
        return view('admin.attributes.index', compact('attributes', 'measures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $measures = Measure::all();
        return view('admin.attributes.create', compact('measures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute = new Attribute;
        $attribute->name = $request->name;
        
        if ($request->has('measure'))
            $attribute->measure_id = $request->measure;

        try {
            $attribute->save();
        } catch (Throwable $th) {
            return back()->withInput()->withErrors('Характеристика с таким названием уже существует!');
        }
        return redirect()->route('mtshop.admin.attributes')->withSuccess('Характеристика успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute $attribute)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attribute = Attribute::find($id);
        $measures = Measure::all();
        return view('admin.attributes.edit', compact('attribute', 'measures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attribute = Attribute::find($id);
        $attribute->name = $request->name;
        try {
            $attribute->save();
        } catch (Throwable $th) {
            return back()->withInput()->withErrors('Характеристика с таким названием уже существует!');
        }
        if ($request->has('measure')) {
            if ($request->measure == "null")
                $attribute->measure_id = null;
            else
                $attribute->measure_id = $request->measure;
            $attribute->save();
            return redirect()->route('mtshop.admin.attributes')->withSuccess('Характеристика успешно изменена!');
        }
        return redirect()->route('mtshop.admin.attributes')->withSuccess('Характеристика успешно изменена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        //
    }

    public function submit(Request $request) 
    {
        if ($request['attributes'] == null)
            return back()->withErrors('Ничего не выбрано!');

        switch ($request->action) {
            case 'delete':
                try {
                    Attribute::destroy($request['attributes']);
                } catch (Throwable $th) {
                    return back()->withErrors('Невозможно удалить некоторые характеристики!');
                }
                return redirect()->route('mtshop.admin.attributes')->withSuccess('Выбранные характеристики успешно удалены!');
                break;

            case 'change-measure':
                try {
                    $attributes = Attribute::whereIn('id', $request['attributes'])->get();
                    foreach ($attributes as $item) {
                        if ($request['measure'] == "null")
                            $item->measure_id = null;
                        else
                            $item->measure_id = $request['measure'];
                        $item->save();
                    }
                } catch (Throwable $th) {
                    return back()->withErrors('Невозможно удалить некоторые характеристики!');
                }
                return redirect()->route('mtshop.admin.attributes')->withSuccess('Выбранные характеристики успешно изменены!');
                break;
            
            default:
                return back()->withErrors('Действие не определено!');
                break;
        }
    }
}
