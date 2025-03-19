@extends('layouts-page.app')

@section('title', 'Detail Penugasan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('penugasan.index') }}" class="btn btn-danger mb-2 py-1">Kembali</a>
        </div>
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header pb-0">
                    <h5 class="m-0">Detail Penugasan</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Materi</th>
                                <td>{{ $penugasan->penugasan_name }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{ $penugasan->penugasan_description }}</td>
                            </tr>
                            <tr>
                                <th>File</th>
                                <td>
                                    @if ($penugasan->file_path)
                                        <a href="{{ asset('storage/' . $penugasan->file_path) }}" target="_blank">Lihat
                                            File</a>
                                    @else
                                        <span class="text-muted">Tidak ada gambar</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Link</th>
                                <td>
                                    @if ($penugasan->link)
                                        <a href="{{ $penugasan->link }}" target="_blank">Buka Link</a>
                                    @else
                                        <span class="text-muted">Tidak ada link</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Tugas Untuk Divisi</th>
                                <td>{{ ucfirst($penugasan->role->name) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
