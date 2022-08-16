<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('table');
    }

    public function FormTambah(){
        return view('create');
    }

    public function ProsesCreate(Request $request){

        // $data = $request->all();
        // dd($data);
        // cara cepat
        // $tambah = Gudan::create($data);

        // $tambah2 = Gudang::create([
        //     'nama_barang' => $data['nama_barang'],
        //     'stock' => $data['stock'],
        //     'keterangan' => $data['keterangan'],
        //     'tgl' => $data['tgl'],
        // ]);

        // cara middle
        // $tambah2 = Gudang
        // cara lambat
        $tambah3 = new Gudang;
        $tambah3->nama_barang = $request->nama_barang;
        $tambah3->stock = $request->stock;
        $tambah3->keterangan = $request->keterangan;
        $tambah3->tgl = $request->tgl;
        $tambah3->save();

        return redirect()->back();
    }
}
