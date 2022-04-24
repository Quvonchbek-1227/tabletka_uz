<?php

namespace App\Http\Controllers\User;

use App\Models\Drug;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DrugsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drugs = Drug::all();
        return view('user.drugs',['drugs' => $drugs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.add-drug');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('img');
        $img_name = time().'_'.$img->getClientOriginalName();
        $img_url = asset('adminpanel/images/drugs/'.$img_name);
        $path = public_path('adminpanel/images/drugs/');
        $img->move($path,$img_name);

        $drug = Drug::create([
            'name' => $request->name,
            'manual' => $request->manual,
            'description' => $request->description,
            'unit' => $request->unit,
            'img' => $img_url,
        ]);
        
        if ($drug) {
            return redirect()->route('user.home')->with('ok','Da`ri bazag`a saqlandi!');
        }else{
            return redirect()->route('user.home')->with('fail','Da`ri kiritiwde qa`telik iltimas qaytadan urinip ko`rin`!');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
