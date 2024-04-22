@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    <div class="card-tools"></div>
    </div>
    <div class="card-body">
    @empty($status)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> Data yang Anda cari tidak ditemukan.
        </div>
        @else
    <table class="table table-bordered table-striped table-hover tablesm">
        <tr>
            <th>ID</th>
            <td>{{ $status->id_detail_status }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $status->barang->nama_barang }}</td>
        </tr>
        <tr>
            <th>NUP Barang</th>
            <td>{{ $status->barang->NUP }}</td>
        </tr>
        <tr>
            <th>Pencatat</th>
            <td>{{ $status->user->nama }}</td>
        </tr>
        <tr>
            <th>Status Awal</th>
            <td>{{ $status->status_awal }}</td>
        </tr>
        <tr>
            <th>Status Akhir</th>
            <td>{{ $status->status_akhir }}</td>
        </tr>
        <tr>
            <th>Approval Status</th>
            <td>{{ $status->approval_status }}</td>
        </tr>
        </table>
    @endempty
    <a href="{{ url('status') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush