<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drug;
use Illuminate\Support\Facades\URL;


class DrugsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Drug::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'manual' => 'required|string|max:255',
            'img' => 'image|mimes:jpg,jpeg,png',
            'unit' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        if ($request->HasFile('img')) {
            $img = $request->img;
            $img_name = $img->getClientOriginalName();
            $img_name = time().'_'.$img_name;
            $img_url = asset('img/drugs/'.$img_name);
            $path = public_path('img/drugs/');
            $img->move($path,$img_name);
        }

        $drug = Drug::create([
            'name' => $request->name,
            'manual' => $request->manual,
            'unit' => $request->unit,
            'description' => $request->description,
            'img' => $img_url ?? 'null',
        ]);

        return $drug;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Drug::find($id);
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
        $drug = Drug::find($id);
        $old_img = $drug->img;

        $request->validate([
            'name' => 'required|string|max:255',
            'manual' => 'required|string|max:255',
            'img' => 'image|mimes:jpg,jpeg,png',
            'unit' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        if ($request->HasFile('img')) {
            $img = $request->img;
            $img_name = $img->getClientOriginalName();
            $img_name = time().'_'.$img_name;
            $img_url = asset('img/drugs/'.$img_name);
            $path = public_path('img/drugs/');
            $img->move($path,$img_name);
        }
        if ($old_img != 'null') {
            unlink(public_path(explode(URL::to('/'),$old_img)[1]));
        }

        $new_drug = $drug->update([
            'name' => $request->name,
            'manual' => $request->manual,
            'unit' => $request->unit,
            'description' => $request->description,
            'img' => $img_url ?? 'null',
        ]);

        return $new_drug;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $drug = Drug::find($id);
            $img = $drug->img;
            if ($img != 'null') {
                unlink(public_path(explode(URL::to('/'),$img)[1]));
            }
            $drug->delete();
            return 1;
        } catch (Exception $e) {
            return $e;
        }

    }
}
