<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DB::table('tabel_mahasiswa')->get();

        return view('index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tabel_mahasiswa')->insert(
            [
                'Nama' => $request->Nama,
                'Jurusan' => $request->Jurusan,
                'Kelas' => $request->Kelas,
                'Angkatan' => $request->Angkatan,
                'Email' => $request->Email,
                'NoHP' => $request->NoHP,
                'Alamat' => $request->Alamat
            ]
        );

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = DB::table('tabel_mahasiswa')->where('id', $id)->get();

        return view('show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = DB::table('tabel_mahasiswa')->where('id', $id)->get();

        return view('edit', compact('mahasiswa'));
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
        DB::table('tabel_mahasiswa')->where('id', $id)->update([
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'Kelas' => $request->Kelas,
            'Angkatan' => $request->Angkatan,
            'Email' => $request->Email,
            'NoHP' => $request->NoHP,
            'Alamat' => $request->Alamat
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tabel_mahasiswa')->where('id', $id)->delete();

        return redirect('/');
    }
}
