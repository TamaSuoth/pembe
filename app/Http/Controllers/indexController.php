<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        //menampilkan semua data gudang
        $gudang = Gudang::all();

        // tampilkan data gudang ke dalam view tabel
        return view('table',[
            'gudang' => $gudang
        ]);
    }

    public function FormTambah(){
        return view('create');
    }

    public function tampil(){

    }

    public function edit($id){
        $gudang = Gudang::find($id);

        return view('edit', [
            'data' => $gudang
        ]);
    }

    public function delete($id){
        $gudang = Gudang::find($id);

        $gudang->delete();

        return redirect()->route('home')->with('message', 'sukseski delete');
    }

    public function update(Request $request, $id){
        // proses update data

        // validasi request data
        $request->validate([
            // key                value
            'nama_barang' => 'nullable|string',
            'stock' => 'nullable|numeric',
            'keterangan' => 'nullable',
            'tgl' => 'nullable|date'
        ], [
            'nama_barang.required'=> 'nama barang harus diisi',
            'stock.required'=> 'stock harus diisi',
            'stock.numeric'=> 'stock harus berupa angka',
            'keterangan.required'=> 'keterangan harus diisi',
            'tgl.required'=> 'tanggal harus diisi',
            'tgl.date'=> 'tanggal harus sesuai hari bulan dan tahun'
        ]);

        $gudang = Gudang::find($id);

        $data = $request->all();

        $update = $gudang->update($data);

        return redirect()->route('home')->with('message', 'sukseski update');
    }

    public function ProsesCreate(Request $request){
        // proses input data

        // validasi request data
        $request->validate([
            // key                value
            'nama_barang' => 'required|string',
            'stock' => 'required|numeric',
            'keterangan' => 'required',
            'tgl' => 'required|date'
        ], [
            'nama_barang.required'=> 'nama barang harus diisi',
            'stock.required'=> 'stock harus diisi',
            'stock.numeric'=> 'stock harus berupa angka',
            'keterangan.required'=> 'keterangan harus diisi',
            'tgl.required'=> 'tanggal harus diisi',
            'tgl.date'=> 'tanggal harus sesuai hari bulan dan tahun'
        ]);

        $data = $request->all();
        // dd($data);
        // cara cepat
        $tambah = Gudang::create($data);

            return redirect()->route('home')->with("message", 'sukses');

    }
        // $tambah2 = Gudang::create([
        //     'nama_barang' => $data['nama_barang'],
        //     'stock' => $data['stock'],
        //     'keterangan' => $data['keterangan'],
        //     'tgl' => $data['tgl'],
        // ]);

        // cara middle
        //  $tambah2 = Gudang::create([
        //     'nama_barang' => $data['nama_barang'],
        //     'stock' => $data['stock'],
        //     'keterangan' => $data['keterangan'],
        //     'tgl' => $data['tgl'],
        // ]);
        // cara lambat
        // $tambah3 = new Gudang;
        // $tambah3->nama_barang = $request->nama_barang;
        // $tambah3->stock = $request->stock;
        // $tambah3->keterangan = $request->keterangan;
        // $tambah3->tgl = $request->tgl;
        // $tambah3->save();


}
