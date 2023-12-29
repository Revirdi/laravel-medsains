@extends('layouts.default')
@section('title', 'Detail Data Pegawai ' . $data->nama)
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('pegawai') }}">Pegawai</a></li>
    <li class="breadcrumb-item active">Detail Data Pegawai</li>
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session('success'))
                        <h6 class="alert alert-success">{{ session('success') }}</h6>
                    @endif
                    <form action="{{ url('editpegawai/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"
                                placeholder="nama" value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor Telepon</label>
                            {{-- <input type="tel" pattern="[0-9]" class="form-control" name="nomor_telepon" id="exampleFormControlInput1" placeholder="08....."> --}}
                            <input type="tel" pattern="(08|021)\d{6,13}" maxlength="13" class="form-control"
                                name="nomor_telepon" value="{{ $data->nomor_telepon }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                <option disabled>Pilih Jenis Kelamin</option>
                                <option {{ $data->jenis_kelamin == 'pria' ? 'selected' : null }}>Pria</option>
                                <option {{ $data->jenis_kelamin == 'wanita' ? 'selected' : null }}>Wanita</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
