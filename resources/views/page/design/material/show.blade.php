@extends('layouts-page.app')

@section('title', 'Detail Materi')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ route('design-material.index') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="col-md-12">
            <div class="card shadow border-0">
                <div class="card-header bg-primary">
                    <h5 class="m-0 text-white"><i class="fas fa-file-alt"></i> Detail Materi</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Informasi Materi -->
                        <div class="col-md-8">
                            <h4 class="text-dark font-weight-bold"><i class="fas fa-book"></i>
                                {{ $material->material_name }}</h4>
                            <p class="text-muted">{{ $material->material_description }}</p>
                        </div>

                        <!-- File & Link -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-dark"><i class="fas fa-file"></i> File Materi:</h6>
                                    @if ($material->file_path)
                                        <a href="{{ asset('storage/' . $material->file_path) }}"
                                            class="btn btn-sm btn-success" target="_blank">
                                            <i class="fas fa-download"></i> Lihat File
                                        </a>
                                    @else
                                        <p class="text-muted">Tidak ada file tersedia</p>
                                    @endif

                                    <hr>

                                    <h6 class="text-dark"><i class="fas fa-link"></i> Link Materi:</h6>
                                    @if ($material->link)
                                        <a href="{{ $material->link }}" class="btn btn-sm btn-primary" target="_blank">
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
