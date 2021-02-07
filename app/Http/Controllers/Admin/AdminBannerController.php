<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function index()
    {
        $slides = Banner::where('order', 1)->get();
        $banners1 = Banner::where('order', 2)->get();
        $banners2 = Banner::where('order', 3)->get();
        return view('admin.banners.index', compact('slides', 'banners1', 'banners2'));
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $format = $image->extension();
            if (strtoupper($format) == 'GIF' OR strtoupper($format) =='JPEG' OR strtoupper($format) == 'PNG' OR strtoupper($format) == 'WebP' OR strtoupper($format) == 'SVG' OR strtoupper($format) == 'JPG') {
                // Nothing
            } else {
                return back()->withInput()->withErrors('Допустимые расширения картинок: JPEG, PNG, WebP, SVG, JPG');
            }
            $path = $image->store("assets/home/img/banner", ['disk' => 'public']);
            $imgPath = '/' . $path;
            $banner->url = $imgPath;
        }

        $banner->hyperlink = null;
        if ($request->url != null)
            $banner->hyperlink = $request->url;

        $banner->save();

        return redirect()->route('mtshop.admin.banners.edit', ['banner' => $banner->id])->withSuccess('Данные баннера успешно обновлены!');
    }
}
