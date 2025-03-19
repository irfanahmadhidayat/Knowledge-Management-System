@extends('layouts-page.app')

@section('title', 'Material Design')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="mb-3 text-primary"><i class="fas fa-book"></i> Daftar Materi</h3>
        </div>

        @foreach ($materials as $material)
            <div class="col-md-4">
                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title text-dark font-weight-bold">
                            <i class="fas fa-file-alt"></i> {{ $material->material_name }}
                        </h5>
                        <p class="card-text text-muted">
                            {{ Str::limit($material->material_description, 30, '...') }}
                        </p>
                        <a href="{{ route('design-material.show', $material->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i> Lihat Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
