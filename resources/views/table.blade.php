@extends('index')
@section('isi')


<div class="row">
    <a href="{{route('create.view')}}"  class="button">
        <button  class="btn btn-outline-primary mt-5 mb-2">Create</button>
    </a>
    {{-- menampilkan pesan sukses ketika sudah menambah data --}}
    @if(session() -> has('message'))
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">
                    {{session()->get('message') }}
            </div>
        </div>
    @endif
    {{-- menampilkan pesan gagal ketika sudah menambah data --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- <a href="update.blade.php" class="button">
        <button  class="btn btn-outline-primary mt-4 mb-5">Update</button>
    </a> --}}
</div>


<table class="table">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Stock</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Tanggal</th>
        <th scope="col" class="text-center">Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($gudang as $gudangs)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$gudangs->nama_barang}}</td>
        <td>{{$gudangs->stock}}</td>
        <td>{{$gudangs->keterangan}}</td>
        <td>{{$gudangs->tgl}}</td>
        <td class="text-center">
            <div class="row text-center">
                <div class="col-7">
                    <a href="{{route('edit.data', $gudangs->id)}}" class="btn btn-primary">Update</a>
                </div>
                <div class="col-1">
                    <form action="{{route('delete.data', $gudangs->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin jako kah?')">Delete</button>
                    </form>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection

