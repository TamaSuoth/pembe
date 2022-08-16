@extends('index')
@section('isi')


<div class="row">
    <a href="{{route('create.view')}}"  class="button">
        <button  class="btn btn-outline-primary mt-5 mb-2">Create</button>
    </a>

    <a href="update.blade.php" class="button">
        <button  class="btn btn-outline-primary mt-4 mb-5">Update</button>
    </a>
</div>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Miming</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Ryan</td>
        <td>Abdesir</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

@endsection

