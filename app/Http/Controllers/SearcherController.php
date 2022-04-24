<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use App\Models\drug_pharmacy;

class SearcherController extends Controller
{
    function search(Request $request){
        $drug_id = $request->name;
        $pharmacies = Drug::find($drug_id)->pharmacies;
        $drugs = Drug::find($drug_id)->get();
        $dps = drug_pharmacy::where('drug_id',$drug_id)->get();

        // $aptek = Pharmacy::select('pharmacies.*','drug_pharmacies.price')
        // ->join('drug_pharmacies','drug_pharmacies.pharmacy_id','pharmacies.id')
        // ->join('drugs','drug_pharmacies.drug_id','drugs.id')
        // ->where('drugs.name',$drug_name)
        // ->get();
        
        
        // return $dps;
        return view('user.index',[
            'pharmacies' => $pharmacies,
            'drugs' => $drugs,
            'dps' => $dps,
        ]);
        
    }
}
