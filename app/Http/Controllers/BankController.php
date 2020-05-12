<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Bank;


class BankController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $bank   = Bank::All(); 
        
        $bank=DB::table('bank')->paginate(10);
 
    
    	return view('bankindex',['bank' => $bank]);
    } 
    
    public function tambah() 
    {
        return view('banktambah');
    } 

    public function store(Request $request)
    {
        DB::table('bank')->insert([
            'nama_bank'=>$request->nama_bank,
            'no_rekening_bank'=>$request->rekening_bank
        ]);

        return redirect('/bank');
    }  

    public function edit($id)
    {
       // mengambil data pegawai berdasarkan id yang dipilih 
       // $donatur = Donatur::find($id);
       $bank = DB::table('bank')->where('id_bank',$id)->get();
       // passing data pegawai yang didapat ke view edit.blade.php
       return view('bankedit',['bank' => $bank]);
    }

    public function update($id, Request $request)
    { 
        { 

            DB::table('bank')->where('id_bank',$request->id)->update([
                'nama_bank'=>$request->nama_bank,
                'no_rekening_bank'=>$request->rekening_bank
                
    
            ]);
    
            return redirect('/bank');
        } 
    }


    public function delete($id) {
        DB::table('bank')->where('id_bank', $id)->delete();

        return redirect('/bank');
 
    } 

    public function find(Request $request){
        $find= $request->find; 

        $bank=DB::table('bank')
        ->where ('nama_bank', 'like', '%'. $find.'%')
        ->paginate();

        return view('bankindex',['bank' =>$bank]);

    }

}    
