@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('status/create')}}">Tambah</a>
            </div>
        </div>
            <div class="card-body">
                @if (@session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (@session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-1 control-label col-form-label">Filter:</label>
                            <div class="col-3">
                                <select class="form-control" id="id_barang" name="id_barang" required>
                                    <option value="">- Semua -</option>
                                    @foreach($barang as $item)
                                        <option value="{{ $item->id_barang }}">{{ $item->NUP }} - {{ $item->nama_barang }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Barang</small>
                            </div>
                            <div class="col-3">
                                <select class="form-control" id="id_user" name="id_user" required>
                                    <option value="">- Semua -</option>
                                    @foreach($user as $item)
                                        <option value="{{ $item->id_user }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Penulis</small>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped table-hover table-sm" id="table_status">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Ditulis Oleh</th>
                        <th>Status Awal</th>
                        <th>Status Akhir</th>
                        <th>Approval Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                </table>
            </div>
    </div>
@endsection

@push('css')
@endpush
@push('js')

<script>
    $(document).ready(function() {
        var dataStatus = $('#table_status').DataTable({
            serverSide: true, // serverSide: true, jika ingin menggunakan server side processing
            ajax: {
            "url": "{{ url('status/list') }}",
            "dataType": "json",
            "type": "POST",
            "data": function ( d ) {
                d.id_barang = $('#id_barang').val();
                d.id_user = $('#id_user').val();
            }
            },
            columns: [
                {
                data: "DT_RowIndex", // nomor urut dari laravel datatable addIndexColumn()
                className: "text-center",
                orderable: false,
                searchable: false
                },
                {
                data: "barang.nama_barang",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                },
                {
                data: "user.nama",
                className: "",
                orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                },
                {
                data: "status_awal",
                className: "",
                orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                },
                {
                data: "status_akhir",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari
                },
                {
                data: "approval_status",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari
                },
                {
                data: "aksi",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari
                }
            ]
        });

        $('#id_barang').on('change', function() {
            dataStatus.ajax.reload();
        });
        $('#id_user').on('change', function() {
            dataStatus.ajax.reload();
        })
    });
</script>
@endpush