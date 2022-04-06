<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pharmacy;
use Illuminate\Support\Facades\URL;


class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pharmacy::all();
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
        $request->validate([
            'name' => 'required|string|max:255',
            'work_time' => 'required|string|max:20',
            'region' => 'required|string|max:40',
            'adress' => 'required|string|max:255',
            'ip_adress' => 'required|string|max:255',
            'telefon' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpg,jpeg,png',
            'description' => 'required|string',
            'arentr' => 'required|string|max:255',
            'id_seller' => 'required|integer',
        ]);

        $img = $request->img;
        $img_name = $img->getClientOriginalName();
        $img_name = time().'_'.$img_name;
        $img_url = asset('img/pharmacy/'.$img_name);
        $path = public_path('img/pharmacy/');
        $img->move($path,$img_name);

        $pharmacy = Pharmacy::create([
            'name' => $request->name,
            'work_time' => $request->work_time,
            'region' => $request->region,
            'adress' => $request->adress,
            'ip_adress' => $request->ip_adress,
            'telefon' => $request->telefon,
            'img' => $img_url,
            'description' => $request->description,
            'arentr' => $request->arentr,
            'id_seller' => $request->id_seller
        ]);

        return $pharmacy;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pharmacy::find($id);
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
        // return 'Apteka update!';
        $request->validate([
            'name' => 'required|string|max:255',
            'work_time' => 'required|string|max:20',
            'region' => 'required|string|max:40',
            'adress' => 'required|string|max:255',
            'ip_adress' => 'required|string|max:255',
            'telefon' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpg,jpeg,png',
            'description' => 'required|string',
            'arentr' => 'required|string|max:255',
            'id_seller' => 'required|integer',
        ]);

        $img = $request->img;
        $img_name = $img->getClientOriginalName();
        $img_name = time().'_'.$img_name;
        $img_url = asset('img/pharmacy/'.$img_name);
        $path = public_path('img/pharmacy/');
        $img->move($path,$img_name);


        $pharmacy = Pharmacy::find($id);

        $old_img = $pharmacy->img;
        unlink(public_path(explode(URL::to('/'),$old_img)[1]));

        $pharmacy = $pharmacy->update([
            'name' => $request->name,
            'work_time' => $request->work_time,
            'region' => $request->region,
            'adress' => $request->adress,
            'ip_adress' => $request->ip_adress,
            'telefon' => $request->telefon,
            'img' => $img_url,
            'description' => $request->description,
            'arentr' => $request->arentr,
            'id_seller' => $request->id_seller
        ]);

        return $pharmacy;
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
            $pharmacy = Pharmacy::find($id);
            $img = $pharmacy->img;
            unlink(public_path(explode(URL::to('/'),$img)[1]));
            $pharmacy->delete();
        } catch (Exception $e) {
            return $e;
        }

    }
}
