@extends('layouts-page.app')

@section('title', 'Detail Penugasan')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ route('design-penugasan.index') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <a href="{{ route('hasil-penugasan.create', ['penugasan_id' => $penugasan->id]) }}" class="btn btn-primary">
                <i class="fas fa-upload"></i> Kirim Tugas
            </a>
        </div>

        <div class="col-md-12">
            <div class="card shadow border-0">
                <div class="card-header bg-primary">
                    <h5 class="m-0 text-white"><i class="fas fa-tasks"></i> Detail Penugasan</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Informasi Penugasan -->
                        <div class="col-md-8">
                            <h4 class="text-dark font-weight-bold"><i class="fas fa-clipboard-list"></i>
                                {{ $penugasan->penugasan_name }}</h4>
                            <p class="text-muted">{{ $penugasan->penugasan_description }}</p>
                        </div>

                        <!-- File & Link -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-dark"><i class="fas fa-file"></i> File Penugasan:</h6>
                                    @if ($penugasan->file_path)
                                        <a href="{{ asset('storage/' . $penugasan->file_path) }}"
                                            class="btn btn-sm btn-success" target="_blank">
                                            <i class="fas fa-download"></i> Lihat File
                                        </a>
                                    @else
                                        <p class="text-muted">Tidak ada file tersedia</p>
                                    @endif

                                    <hr>

                                    <h6 class="text-dark"><i class="fas fa-link"></i> Link Penugasan:</h6>
                                    @if ($penugasan->link)
                                        <a href="{{ $penugasan->link }}" class="btn btn-sm btn-primary" target="_blank">
                                            <i class="fas fa-external-link-alt"></i> Buka Link
                                        </a>
                                    @else
                                        <p class="text-muted">Tidak ada link tersedia</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
