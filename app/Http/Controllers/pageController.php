<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class pageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function profile()
    {
        return view('profile', ['key' => 'profile']);
    }
    public function mahasiswa()
    {
        $mhs = Mahasiswa::orderBy('id','desc')->paginate(10);
        return view('mahasiswa', ['key'=> 'mahasiswa', 'mhs' => $mhs]);
    }
    public function pencarian(Request $request){
        $cari = $request->q;
        $mhs = Mahasiswa::where('nim','like','%'.$cari.'%')-> paginate(10);
        $mhs = Mahasiswa::where('nama','like','%'.$cari.'%')-> paginate(10);
        $mhs->appends($request->all());
        return view('mahasiswa', ['key' => 'mahasiswa','mhs'=> $mhs]);
    }
    public function tambah(){
        return view('tambah', ['key' => 'mahasiswa']);
    }
    public function simpan(Request $request){
        $minat= implode(',',$request->get('minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,   
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $minat
        ]);
        return redirect('mahasiswa')->with('flash','Data berhasil disimpan!');
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('update',['mahasiswa' => $mahasiswa],['key' => 'mahasiswa']);
    }
    public function update($id, Request $request){
        $minat = implode(',',$request->get('minat'));
        $mhs = Mahasiswa::find($id);
        $mhs -> nim = $request->nim;
        $mhs -> nama = $request->nama;
        $mhs -> gender = $request->gender;
        $mhs -> prodi = $request->prodi;
        $mhs -> minat = $minat;
        $mhs->save();
        return redirect('/mahasiswa')->with('flash','Data berhasil dirubah!');
       

    }
    public function delete($id){
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('/mahasiswa')->with('flash','Data berhasil dihapus!');
    }
    public function contact()
    {
        return view('contact', ['key' => 'contact']);
    }
}
