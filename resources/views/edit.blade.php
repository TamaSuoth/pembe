@extends('index')

@section('isi')
<div class="card-header col-md-4">
    <h3>Edit Data</h3>
</div>
{{-- menampilkan pesan gagal ketika sudah menambah data --}}
@if ($errors->any())
<div class="col-md-4">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<form class="mt-5" method="POST" action="{{route('update.data', $data->id)}}">
    @csrf
    @method('PUT')
    <div class="col-md-4">
        <div class="form-group">
            <label class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" value="{{$data->nama_barang}}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock" value="{{$data->stock}}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="form-label">Keterangan</label>
            <textarea type="text" class="form-control" name="keterangan" >{{$data->keterangan}}</textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tgl" value="{{$data->tgl}}">
        </div>
    </div>
    <button type="submit" class="btn btn-outline-primary mt-5">Submit</button>
</form>
@endsection

