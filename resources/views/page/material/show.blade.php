@extends('layouts-page.app')

@section('title', 'Detail Materi')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('material.index') }}" class="btn btn-danger mb-2 py-1">Kembali</a>
        </div>
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header pb-0">
                    <h5 class="m-0">Detail Materi</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Materi</th>
                                <td>{{ $material->material_name }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{ $material->material_description }}</td>
                            </tr>
                            <tr>
                                <th>File</th>
                                <td>
                                    @if ($material->file_path)
                                        <a href="{{ asset('storage/' . $material->file_path) }}" target="_blank">Lihat
                                            File</a>
                                    @else
                                        <span class="text-muted">Tidak ada gambar</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Link</th>
                                <td>
                                    @if ($material->link)
                                        <a href="{{ $material->link }}" target="_blank">Buka Link</a>
                                    @else
                                        <span class="text-muted">Tidak ada link</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Tugas Untuk Divisi</th>
                                <td>{{ ucfirst($material->role->name) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
