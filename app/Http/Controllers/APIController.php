<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class APIController extends Controller
{
    public function read(){
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dipanggil', 
            'data' => $mhs],200);
    }

    public function create(Request $request){
        $mhs = Mahasiswa::create([
            'nim'=> $request->nim,
            'nama'=> $request->nama,
            'gender' => $request->gender,
            'prodi'=> $request->prodi,
            'minat' => $request->minat
        ]);
        if($mhs){
            return response()->json([
                'success'=>true,
                'message' => 'Data berhasil; di Tambahkan'
         ],200);
        }else{
            return response()->json([
                'success' =>false,
                'message' => '404 || Not Found!'
            ]);
        }    
    }
    public function update($id, Request $request){
        $mhs = Mahasiswa::find($id)->update([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'gender' => $request->gender,
        'prodi' => $request->prodi,
        'minat' => $request->minat
        ]);
        
        if($mhs){
            return response()->json([
                'success'=>true,
                'message' => 'Data berhasil diupdate'
         ],200);
        }else{
            return response()->json([
                'success' =>false,
                'message' => '404 || Not Found!'
            ]);
        }   
        

    }
    public function edit($id){
        $mhs = Mahasiswa::whereId($id);
        return response()->json([
            'success' =>true,
            'message' => 'Data berhasil dipanggil'
        ]);
        

    }
    public function delete($id){
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return response()->json([
            'success' =>true,
            'message' => 'Data berhasil dihapus!'
        ]);
    }
}
