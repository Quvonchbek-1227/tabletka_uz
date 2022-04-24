<?php

namespace App\Http\Controllers;


use App\Models\Seller;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmacy = Pharmacy::select('pharmacies.*','sellers.full_name')
        ->join('sellers','pharmacies.id_seller','=','sellers.id')
        ->get();
        // return $pharmacy;
        return view('user.pharmacy',[
            'pharmacy' => $pharmacy
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = Seller::all();
        return view('user.add-pharmacy',[
            'sellers' => $sellers,
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pharmacy = new Pharmacy();
        $img = $request->file('img');
        $img_name = time().'_'.$img->getClientOriginalName();
        $img_url = asset('adminpanel/images/pharmacy/'.$img_name);
        $path = public_path('adminpanel/images/pharmacy/');
        $img->move($path,$img_name);

        $save = $pharmacy->create([
            'name' => $request->name,
            'work_time' => $request->work_time,
            'region' => $request->region,
            'ip_adress' => $request->ip_adress,
            'telefon' => $request->telefon,
            'description' => $request->description,
            'arentr' => $request->arentr,
            'adress' => $request->adress,
            'img' => $img_url,
            'id_seller' => $request->id_seller,
        ]);
        if($save){
            return back();
        }else{
            return route()->route('user.home')->with('fail','Mag`liwmatlardi saqlawda qa`telik boldi!');
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
