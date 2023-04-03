<?php

namespace App\Http\Controllers;

use App\Models\JenisAmbulan;
use App\Models\JenisTujuan;
use App\Models\pasien;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardPasienController extends Controller
{
    public function index()
    {
        return view('Konten.DashboardPasien',[
            'PASIEN' => pasien::filter()->latest()->paginate(100)
        ]);
    }
    public function DetailPasien($NORM)
    {
        return view('Konten.PesanAmbulan.PesanAmbulan',[
            'pasien' => pasien::findOrFail($NORM),
            'JenisAmbulan' => JenisAmbulan::get(["name","id"])
        ]);
    }

    public function GetTujuan(Request $request)
    {
        $data['jenistujuan'] = JenisTujuan::where("jenisambulan_id", $request->jenisambulan_id)
        ->get(["name","harga","bbm","penyebrangan","uangmakan","id"]);
        return response()->json($data);
    }
}
