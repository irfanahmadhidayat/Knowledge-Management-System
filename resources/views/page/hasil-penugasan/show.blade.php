@extends('layouts-page.app')

@section('title', 'Detail Hasil Penugasan')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ route('hasil-penugasan.index') }}" class="btn btn-danger">
                <i data-feather="arrow-left"></i> Kembali
            </a>
        </div>

        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="m-0">Detail Hasil Penugasan</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Kiri: Detail Tugas -->
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th>Nama Pengirim</th>
                                    <td>{{ $tugas->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Divisi</th>
                                    <td>{{ ucfirst($tugas->user->getRoleName()) }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Penugasan</th>
                                    <td>{{ $tugas->penugasan->penugasan_name }}</td>
                                </tr>
                                <tr>
                                    <th>Pesan</th>
                                    <td>{{ $tugas->comment }}</td>
                                </tr>
                            </table>
                        </div>

                        <!-- Kanan: File & Link -->
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th>Gambar/PDF</th>
                                    <td>
                                        @if ($tugas->file_path)
                                            <a href="{{ asset('storage/' . $tugas->file_path) }}" target="_blank"
                                                class="btn btn-sm btn-success">
                                                <i data-feather="file"></i> Lihat File
                                            </a>
                                        @else
                                            <span class="text-muted">Tidak ada file</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Link</th>
                                    <td>
                                        @if ($tugas->link)
                                            <a href="{{ $tugas->link }}" target="_blank" class="btn btn-sm btn-info">
                                                <i data-feather="external-link"></i> Buka Link
                                            </a>
                                        @else
                                            <span class="text-muted">Tidak ada link</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <form action="{{ route('hasil-penugasan.destroy', $tugas->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i data-feather="trash"></i> Hapus Tugas
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
