@extends('layouts.default')
@section('title', 'Data Pegawai')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
    <li class="breadcrumb-item active">Data Pegawai</li>
@stop
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" data-auto-close="3000">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between mb-2">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <a href="{{ url('tambahpegawai') }}" class="btn btn-success">Tambah +</a>
                    </div>
                    <div class="row">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Nomor telepon</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($no = 0)
                                @foreach ($datas as $data)
                                    @php($no = $no + 1)
                                    <tr>
                                        <th scope="row">{{ $no }}</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->nomor_telepon }}</td>
                                        <td>{{ $data->created_at?->isoFormat('D MMMM Y') ?? '' }}</td>
                                        <td>
                                            <a href="{{ url('pegawai/' . $data->id) }}" type="button"
                                                class="btn btn-info">Edit</a>
                                            {{-- <a href="{{url('deletepegawai/'. $data->id)}} type="button" class="btn btn-danger">Delete</a> --}}
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModalCenter_{{ $data->id }}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @include('employee.modal.delete')
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
