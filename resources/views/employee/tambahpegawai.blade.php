@extends('layouts.default')
@section('title', 'Tambah Data Pegawai')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('pegawai') }}">Pegawai</a></li>
    <li class="breadcrumb-item active">Tambah Data Pegawai</li>
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if ($message = Session::get('failed'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" data-auto-close="3000">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('tambahpegawai') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"
                                        placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nomor Telepon</label>
                                    {{-- <input type="tel" pattern="[0-9]" class="form-control" name="nomor_telepon" id="exampleFormControlInput1" placeholder="08....."> --}}
                                    <input type="tel" pattern="(08|021)\d{6,13}" maxlength="13" class="form-control"
                                        name="nomor_telepon" placeholder="08xxxxx">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                    </select>
                                </div>
                                <div class="d-flex flex-row-reverse">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
