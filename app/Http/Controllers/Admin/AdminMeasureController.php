<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Measure;
use Throwable;

class AdminMeasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $measures = Measure::orderBy('name')->get();
        return view('admin.measures.index', compact('measures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.measures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $measure = new Measure;
        $measure->name = $request->name;
        try {
            $measure->save();
        } catch (Throwable $th) {
            return back()->withInput()->withErrors('Измерение с таким названием уже существует!');
        }
        return redirect()->route('mtshop.admin.measures')->withSuccess('Измерение успешно создано!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $measure = Measure::find($id);
        return view('admin.measures.edit', compact('measure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $measure = Measure::find($id);
        $measure->name = $request->name;
        try {
            $measure->save();
        } catch (Throwable $th) {
            return back()->withInput()->withErrors('Измерение с таким названием уже существует!');
        }
        return redirect()->route('mtshop.admin.measures')->withSuccess('Измерение успешно изменено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function submit(Request $request)
    {
        if ($request['measures'] == null)
            return back()->withErrors('Ничего не выбрано!');

        switch ($request->action) {
            case 'delete':
                try {
                    Measure::destroy($request['measures']);
                } catch (Throwable $th) {
                    return back()->withErrors('Невозможно удалить некоторые измерении!');
                }
                return redirect()->route('mtshop.admin.measures')->withSuccess('Выбранные измерения успешно удалены!');
                break;
            
            default:
                return back()->withErrors('Действие не определено!');
                break;
        }
    }
}
