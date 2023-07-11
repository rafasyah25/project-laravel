<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KelasController extends Controller
{
    public function list()
    {
        $kelas = Kelas::select('kode_kelas','kode_prodi','nama_kelas')
        // ->with('kelas')
        ->get()
        ->map(function ($kls) {
            return [
                'kode_kelas' => $kls->kode_kelas,
                'kode_prodi' => $kls->kode_prodi,
                'nama_kelas' => $kls->nama_kelas      
            ];
        });
        // return $kelas;
        return view('pages.kelas.list', compact('kelas'));

    }

    public function simpan()
    {
        return view('pages.kelas.simpan');
    }

    public function buat(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                'kode_kelas' => $request->kode_kelas,
                'kode_prodi' => $request->kode_prodi,
                'nama_kelas' => $request->nama_kelas,
            ];

            $create = Kelas::create($data);
            DB::commit();
            return $create;
        } catch (\Exception $th) {
            //throw $th;
            DB::rollBack();
            return $th;
        }
    }

    public function show($kode_kelas)
    {
        $kelas = Kelas::where('kode_kelas', $kode_kelas)->first();
        return $kelas;
    }

    public function update(Request $request)
    {

    }

    public function delete()
    {

    }

}
