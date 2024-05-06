<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MasterMobil;

class MobilController extends Controller
{
    public function index(){
        $data = MasterMobil::all();
    
        return view('.master.mobil.index')->with("data", $data);
    }

    public function indexAdd(){
        return view('.master.mobil.add');
    }

    public function store(Request $request){
        $request->validate([
            'merk'      => 'required',
            'model'     => 'required',
            'no_plat'   => 'required',
            'harga'     => 'required',
        ]);
       
        $data = [
            'merek'         =>$request->input('merk'),
            'model'         =>$request->input('model'),
            'nomor_plat'    =>$request->input('no_plat'),
            'tarif_sewa'    =>$request->input('harga'),
      
        ];

        $mobilNew = MasterMobil::insertGetId($data);

        if($mobilNew > 0){
            return redirect('mobil');
        } else {
            return redirect('mobil')->withErrors('data tidak masuk');
        }
    }
}
