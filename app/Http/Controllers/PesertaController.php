<?php

namespace App\Http\Controllers;

 use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Peserta;



class PesertaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $peserta = Peserta::All();
    
      
        $peserta=DB::table('peserta')->paginate(10);
 
    
    	return view('pesertaindex',['peserta' => $peserta]);
    } 

    public function tambah() 
    {
        return view('pesertatambah');
    }

    public function store(Request $request)
    {
        DB::table('peserta')->insert([
            'nama_peserta'=>$request->nama_peserta,
            'id_aktivitas'=>$request->id_aktivitas,
            'nama_aktivitas'=>$request->nama_aktivitas,
            'tanggal_aktivitas'=>$request->tanggal_aktivitas
        ]);

        return redirect('/peserta');
    } 

    public function edit($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih 
    // $donatur = Donatur::find($id);
	$peserta = DB::table('peserta')->where('id_peserta',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pesertaedit',['peserta' => $peserta]);
 
    }   


    public function update($id, Request $request)
    { 
        { 
            DB::table('peserta')->where('id_peserta',$request->id)->update([
                'nama_peserta'=>$request->nama_peserta,
                'id_aktivitas'=>$request->id_aktivitas,
                'nama_aktivitas'=>$request->nama_aktivitas,
                'tanggal_aktivitas'=>$request->tanggal_aktivitas
    
            ]);
    
            return redirect('/peserta');
        } 
    }
    
    public function delete($id) {
        DB::table('peserta')->where('id_peserta', $id)->delete();

        return redirect('/peserta');

    }  

    public function find(Request $request){
        $find= $request->find; 

        $peserta=DB::table('peserta')
        ->where ('nama_peserta', 'like', '%'. $find.'%')
        ->paginate();

        return view('pesertaindex',['peserta' =>$peserta]);

    }


}
