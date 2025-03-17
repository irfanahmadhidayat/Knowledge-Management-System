@extends('admin.layouts.app')

@section('title', 'Dashboard - Design Team')

@section('content')
<div class="container mt-5">
    <!-- Informasi User -->
    <div class="bg-light p-4 rounded shadow-lg border border-dark mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0 fw-bold text-primary">Informasi Anggota Devisi</h4>
            <button class="btn btn-outline-primary btn-sm">+ Tambah Nama</button>
        </div>
        <div class="row">
            @foreach(['Andika', 'Setya', 'Dafi', 'Irfan', 'Yoga', 'Aulia'] as $name)
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-between align-items-center border p-3 rounded bg-white shadow-sm">
                    <span class="fw-bold text-dark">{{ $name }}</span>
                    <button class="btn btn-primary btn-sm">Detail</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <!-- Materi -->
    <a href="{{ route('admin.design.materi') }}" class="btn btn-primary w-100 py-3 mb-3">Materi</a>
    
    <!-- Kebijakan Perusahaan -->
    <a href="{{ route('admin.design.kebijakan') }}" class="btn btn-primary w-100 py-3 mt-3">Kebijakan Perusahaan</a>
</div>
@endsection