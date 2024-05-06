@extends('template.main')
@section('content')
<div class="container-fluid">
<div class="row">
    <!-- Scroll - vertical dynamic Starts-->
    <div class="col-sm-12">
    <div class="card">
        <div class="card-header pb-0 card-no-border">
        <h4>Master Mobil</h4><span>
        <a class="btn btn-primary mt-3 ml-auto" href="{{ route('addSewa') }}">Tambah Data</a>
        </div>
        <div class="card-body">
        <div class="table-responsive user-datatable">
            <table class="display" id="basic-12">
            <thead>
                <tr>
                <th>Nomor Plat</th>
                <th>Tanggal Awal</th>
                <th>Tanggal Akhir</th>
                <th>Total Tarif</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $sewa)
                <tr>
                <td>{{ $sewa->nomor_plat }}</td>
                <td>{{ $sewa->tanggal_awal }}</td>
                <td>{{ $sewa->tanggal_akhir }}</td>
                <td>Rp.{{ number_format($sewa->total_tarif, 0, ',', '.') }}</td>
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