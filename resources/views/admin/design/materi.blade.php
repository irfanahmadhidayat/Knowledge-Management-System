@extends('admin.layouts.app')

@section('title', 'Dashboard - Materi Design')

@section('content')
<div class="container mt-5">
    <!-- Daftar Materi -->
    <div class="d-flex justify-content-between align-items-center bg-primary text-white p-3 rounded shadow mb-4">
        <h4 class="mb-0 fw-bold">Daftar Materi</h4>
        <button class="btn btn-light btn-sm text-primary fw-bold">+ Tambah Materi</button>
    </div>

    <!-- List Materi -->
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 shadow-sm mb-2 p-3 rounded bg-white">
            <span class="fw-bold text-primary">Materi A</span>
            <i class="bi bi-chevron-right text-primary"></i>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 shadow-sm mb-2 p-3 rounded bg-white">
            <span class="fw-bold text-primary">Materi B</span>
            <i class="bi bi-chevron-right text-primary"></i>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 shadow-sm mb-2 p-3 rounded bg-white">
            <span class="fw-bold text-primary">Materi C</span>
            <i class="bi bi-chevron-right text-primary"></i>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 shadow-sm mb-2 p-3 rounded bg-white">
            <span class="fw-bold text-primary">Materi D</span>
            <i class="bi bi-chevron-right text-primary"></i>
        </a>
    </div>
</div>
@endsection
