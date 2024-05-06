<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MasterMobil;
use App\Models\TransPenyewaan;
use Carbon\Carbon;

class PenyewaanController extends Controller
{
    public function index(){
        $data = TransPenyewaan::all();
    
        return view('.transaksi.sewa.index')->with("data", $data);
    }

    public function indexAdd(){
        return view('.transaksi.sewa.add');
    }

    public function store(Request $request){
        $request->validate([
            'no_plat'      => 'required',
            'tgl_awal'     => 'required',
            'tgl_akhir'    => 'required',
        ]);

        $tglAwal = Carbon::parse($request->input('tgl_awal'));
        $tglAkhir = Carbon::parse($request->input('tgl_akhir'));

        $jmlHari = $tglAwal->diffInDays($tglAkhir);

        $dataMobil = MasterMobil::find($request->input('id'));

        $totalTarif = 0;
    
        if ($dataMobil) {
            $hargaPerHari = $dataMobil->tarif_sewa;
            $totalTarif = $hargaPerHari * $jmlHari;
        } else {
            //
        }

        $data = [
            'nomor_plat'      => $request->input('no_plat'),
            'tanggal_awal'    => $tglAwal, 
            'tanggal_akhir'   => $tglAkhir, 
            'total_tarif'     => $totalTarif,
        ];

        $sewa = TransPenyewaan::insertGetId($data);

        if($sewa > 0){
            return redirect('listSewa');
        } else {
            return redirect('listSewa')->withErrors('data tidak masuk');
        }
    }
}
