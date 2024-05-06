@extends('template.main')
@section('content')
<div class="container-fluid">
<div class="row">
    <!-- Scroll - vertical dynamic Starts-->
    <div class="col-sm-12">
    <div class="card">
        <div class="card-header pb-0 card-no-border">
        <h4>Master Mobil</h4><span>
        <a class="btn btn-primary mt-3 ml-auto" href="{{ route('addMobil') }}">Tambah Data</a>
        </div>
        <div class="card-body">
        <div class="table-responsive user-datatable">
            <table class="display" id="basic-12">
            <thead>
                <tr>
                <th>Merk</th>
                <th>Model</th>
                <th>Nomor Plat</th>
                <th>Tarif Sewa</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $mobil)
                <tr>
                <td>{{ $mobil->merek }}</td>
                <td>{{ $mobil->model }}</td>
                <td>{{ $mobil->nomor_plat }}</td>
                <td>Rp.{{ number_format($mobil->tarif_sewa, 0, ',', '.') }}</td>
                <td> 
                    <ul class="action"> 
                    <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                    <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                    </ul>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection