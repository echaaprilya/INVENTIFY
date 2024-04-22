@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('status') }}" class="form-horizontal">
        @csrf
        <div class="form-group row">
            <label class="col-1 control-label col-form-label">NUP & Nama Barang</label>
            <div class="col-11">
                <select class="form-control" id="id_barang" name="id_barang" required>
                    <option value="">- Pilih NUP & Nama Barang -</option>
                @foreach($barang as $item)
                    <option value="{{$item->id_barang }}">{{$item->NUP}} - {{$item->nama_barang}}</option>
                @endforeach
                </select>
                @error('id_barang')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-1 control-label col-form-label">Penulisan Oleh</label>
            <div class="col-11">
                <select class="form-control" id="id_user" name="id_user" required>
                    <option value="">- Pilih User -</option>
                @foreach($user as $item)
                    <option value="{{ $item->id_user }}">{{ $item->nama}}</option>
                @endforeach
                </select>
                @error('id_user')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-1 control-label col-form-label">Status Awal</label>
            <div class="col-11">
                <select class="form-control" id="status_awal" name="status_awal" required>
                    <option value="Baik">Baik</option>
                    <option value="Rusak Ringan">Rusak Ringan</option>
                    <option value="Rusak Berat">Rusak Berat</option>
                </select>
            @error('status_awal')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-1 control-label col-form-label">Status Akhir</label>
            <div class="col-11">
                <input type="text" class="form-control" id="status_akhir" name="status_akhir" value="Baik" placeholder="Baik" readonly>
            @error('status_akhir')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-1 control-label col-form-label">Approval Status</label>
            <div class="col-11">
                <input type="text" class="form-control" id="approval_status" name="approval_status" value="Not Yet Approved" placeholder="Not Yet Approved" readonly>
            @error('approval_status')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-1 control-label col-form-label"></label>
            <div class="col-11">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a class="btn btn-sm btn-default ml-1" href="{{ url('status') }}">Kembali</a>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush