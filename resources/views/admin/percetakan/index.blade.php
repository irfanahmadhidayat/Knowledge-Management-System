@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')



<div>
    <!-- Title -->
     <h2><b>Percetakan</b></h2>
    <!-- Informasi User -->
    <div class="bg-light p-4 rounded shadow-lg border border-dark mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0 fw-bold text-primary">Informasi Anggota</h4>
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
    <a href="{{ route('admin.percetakan.materi') }}" class="btn bg-white text-dark w-100 py-3 mb-3 shadow d-flex align-items-center">
        <i class="bi bi-file-text-fill fs-5 me-2"></i> 
        <strong>Materi</strong>
    </a>


    
    <!-- Kebijakan Perusahaan -->
    <a href="{{ route('admin.percetakan.kebijakan') }}" class="btn bg-white text-dark w-100 py-3 mb-3 shadow d-flex align-items-center">
        <i class="bi bi-buildings-fill fs-5 me-2"></i> <strong>Kebijakan Perusahaan</strong>
    </a>
</div>

@endsection