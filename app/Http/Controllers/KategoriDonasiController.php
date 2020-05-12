<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\KategoriDonasi;


class KategoriDonasiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $kategori = KategoriDonasi::All(); 
        
        $kategori=DB::table('kategori_donasi')->paginate(10);
 
    
    	return view('kategoriindex',['kategori' => $kategori]);
    } 

    public function tambah() 
    {
        return view('kategoritambah');
    } 

    public function store(Request $request)
    {
        DB::table('kategori_donasi')->insert([
            'nama_kategori'=>$request->nama_kategori,
            
        ]);

        return redirect('/kategori');
    } 

    public function edit($id)
     {
        // mengambil data pegawai berdasarkan id yang dipilih 
        // $donatur = Donatur::find($id);
        $kategori = DB::table('kategori_donasi')->where('id_kategori_donasi',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('kategoriedit',['kategori_donasi' => $kategori]);
 

     }

    public function update($id, Request $request)
    { 
        { 

            DB::table('kategori_donasi')->where('id_kategori_donasi',$request->id)->update([
                'nama_kategori'=>$request->nama_kategori,
                
    
            ]);
    
            return redirect('/kategori');
        } 
    }

    public function delete($id) {
        DB::table('kategori_donasi')->where('id_kategori_donasi', $id)->delete();

        return redirect('/kategori');

    } 

    public function find(Request $request){
        $find= $request->find; 

        $kategori=DB::table('kategori_donasi')
        ->where ('nama_kategori', 'like', '%'. $find.'%')
        ->paginate();

        return view('kategoriindex',['kategori_donasi' =>$kategori]);

    }
} 