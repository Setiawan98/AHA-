<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jadwal;
use Alert;
class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = Jadwal::all();
        return $jadwals;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('jadwalCRUD.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwals = new Jadwal();
        $jadwals->nama_mapel = $request->nama_mapel;
        $jadwals->hari = $request->hari;
        $jadwals->jam = $request->jam;
        $jadwals->save();

        return response()->json(['status'=>'200','jadwal'=>$jadwals]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id_mapel)
    // {
    //     $jadwals=Jadwal::find($id_mapel);
    //     return view ('jadwalCRUD.show',compact('jadwals'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    //     $jadwals = Jadwal::find($id);
    //     return view('jadwalCRUD.edit',compact('jadwals'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id_jadwal)
    {
        $jadwals = Jadwal::findOrFail($id_jadwal);
        $jadwals->nama_mapel = $request->nama_mapel;
        $jadwals->hari = $request->hari;
        $jadwals->jam = $request->jam;
        $jadwals->save();

        return response()->json(['status'=>'200','jadwal'=>$jadwals]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jadwal)
    {
        $jadwals = Jadwal::findOrFail($id_jadwal);
        if($jadwals->count() > 0){
            $jadwals->delete();
            return response()->json(['status'=>'200','msg'=>'berhasil dihapus']);
        }
        else{
            return response()->json(['status'=>'400','msg'=>'gagal menghapus']);
        }
    }
}