@extends('template.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
        <div class="card height-equal">
            <div class="card-header">
            <h4>Basic HTML input control</h4>
            <p class="f-m-light mt-1">
                Give textual form controls like <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s an upgrade with custom styles, sizing, focus states, and more.</p>
            </div>
            <form class="form theme-form" method="POST">
            @csrf
            <div class="card-body custom-input">
                <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                    <label class="col-sm-3">Nomor Plat</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="no_plat" type="text" placeholder="Tambahkan Merk Mobil">
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3">Tanggal Awal</label>
                        <div class="col-sm-9">
                            <input class="form-control digits" name="tgl_awal" type="date">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3">Tanggal Akhir</label>
                        <div class="col-sm-9">
                            <input class="form-control digits" name="tgl_akhir" type="date">
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <div class="col-sm-9 offset-sm-3">
                <button class="btn btn-primary me-3" type="submit" >Submit</button>
                <a class="btn btn-light" href="{{ route('listSewa') }}">Cancel</a>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection