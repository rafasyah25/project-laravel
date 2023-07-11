<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function list()
    {
        $mahasiswa = Mahasiswa::select('nim', 'kode_kelas', 'nama_mahasiswa', 'email')
        ->with('kelas')
        ->get()
        ->map(function ($mhs) {
            return [
                'nim' => $mhs->nim,
                'nama' => $mhs->nama_mahasiswa,
                'kelas' => $mhs->kelas->nama_kelas,
                'email' => $mhs->email
            ];
        });
        // return $mahasiswa;
        return view('pages.mahasiswa.list', compact('mahasiswa'));
    }

    public function simpan()
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
        return view('pages.mahasiswa.simpan', compact('kelas'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                'nim' => $request->nim,
                'kode_kelas' => $request->kode_kelas,
                'nama_mahasiswa' => $request->nama_mahasiswa,
                'email' => $request->email,
                'jk' => $request->jk,
                'alamat' =>$request->alamat,
                'username' =>$request->nim,
                'password' =>Hash::make($request->nim)
            ];

            $create = Mahasiswa::create($data);
            DB::commit();
            return $create;
        } catch (\Exception $th) {
            //throw $th;
            DB::rollBack();
            return $th;
        }
    }

    public function show($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        return $mahasiswa;
    }

    public function update(Request $request)
    {

    }

    public function delete()
    {

    }
}
