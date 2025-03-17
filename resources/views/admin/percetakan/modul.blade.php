@extends('admin.layouts.app')

@section('title', 'Dashboard - Modul Percetakan')

@section('content')

<!--title-->
<h2><strong>Percetakan</strong></h2>
<br>
    <div class="d-flex justify-content-between align-items-center bg-primary text-white p-3 rounded shadow mb-4">
        <h3 class="mb-0 text-white fw-bold">Materi A</h3>
        <div>
            <button class="btn btn-light btn-sm text-primary fw-bold">+ Tambah Modul</button>
            <button class="btn btn-light btn-sm text-primary fw-bold">+ Tambah Praktik</button>
        </div>
    </div>

    @foreach (['Judul Modul 1', 'Judul Modul 2', 'Judul Modul 3'] as $index => $judul)
    <div class="mb-3">
        <!-- Judul Modul (Trigger Dropdown) -->
        <button class="w-100 border-0 bg-transparent d-flex justify-content-between align-items-center p-2" 
                data-bs-toggle="collapse" data-bs-target="#modul{{ $index }}" aria-expanded="false">
            <span class="fw-bold fs-4">{{ $judul }}</span>
            <i class="bi bi-chevron-down"></i>
        </button>

        <!-- List Modul (Dropdown) -->
        <div id="modul{{ $index }}" class="collapse mt-2">
            @foreach (['Modul 1', 'Modul 2', 'Praktikum'] as $modul)
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 shadow-sm mb-2 p-3 rounded 
                    {{ str_contains($modul, 'Praktikum') ? 'bg-warning text-white' : 'bg-white' }}">
                    <span class="fw-bold {{ str_contains($modul, 'Praktikum') ? 'text-white' : 'text-primary' }}">{{ $modul }}</span>
                    <i class="bi bi-chevron-right {{ str_contains($modul, 'Praktikum') ? 'text-white' : 'text-primary' }}"></i>
                </a>
            @endforeach
        </div>
    </div>
    @endforeach

@endsection