@extends('layouts-page.app')

@section('title', 'Material')

@section('extra-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header pb-0">
                    <a href="{{ route('material.create') }}" class="btn btn-primary">Tambah Material</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Materi</th>
                                    <th>Deskripsi</th>
                                    <th>File</th>
                                    <th>Link</th>
                                    <th>Materi Untuk Divisi</th>
                                    <th>Materi Dibuat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materials as $material)
                                    <tr>
                                        <td>{{ $material->material_name }}</td>
                                        <td>{{ Str::limit($material->material_description, 20, '...') }}</td>
                                        <td>
                                            @if ($material->file_path)
                                                <a href="{{ asset('storage/' . $material->file_path) }}"
                                                    target="_blank">Lihat File</a>
                                            @else
                                                <span class="text-muted">Tidak ada gambar</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($material->link)
                                                <a href="{{ $material->link }}" target="_blank">Buka Link</a>
                                            @else
                                                <span class="text-muted">Tidak ada link</span>
                                            @endif
                                        </td>
                                        <td>{{ ucfirst($material->role->name) }}</td>
                                        <td>{{ \Carbon\Carbon::parse($material->created_at)->locale('id')->diffForHumans() }}
                                        </td>
                                        <td>
                                            <a href="{{ route('material.edit', $material->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ route('material.show', $material->id) }}"
                                                class="btn btn-info">Show</a>
                                            <form action="{{ route('material.destroy', $material->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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
@endsection

@section('extra-js')
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
