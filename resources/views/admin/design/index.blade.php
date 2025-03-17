@extends('admin.layouts.app')

@section('title', 'Dashboard - Design Team')

@section('content')
<div class="container mt-5">
    <!-- Informasi User -->
    <div class="bg-light p-3 rounded shadow-lg border border-dark mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="mb-0 font-weight-bold">Informasi User</h4>
            <button class="btn btn-secondary btn-sm">Tambah Nama</button>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 mb-2">
                <div class="d-flex justify-content-between align-items-center border p-2 rounded bg-white shadow-sm">
                    <span>Andika</span>
                    <button class="btn btn-primary btn-sm">Detail</button>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="d-flex justify-content-between align-items-center border p-2 rounded bg-white shadow-sm">
                    <span>Setya</span>
                    <button class="btn btn-primary btn-sm">Detail</button>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="d-flex justify-content-between align-items-center border p-2 rounded bg-white shadow-sm">
                    <span>Dafi</span>
                    <button class="btn btn-primary btn-sm">Detail</button>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="d-flex justify-content-between align-items-center border p-2 rounded bg-white shadow-sm">
                    <span>Irfan</span>
                    <button class="btn btn-primary btn-sm">Detail</button>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="d-flex justify-content-between align-items-center border p-2 rounded bg-white shadow-sm">
                    <span>Yoga</span>
                    <button class="btn btn-primary btn-sm">Detail</button>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="d-flex justify-content-between align-items-center border p-2 rounded bg-white shadow-sm">
                    <span>Aulia</span>
                    <button class="btn btn-primary btn-sm">Detail</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Materi -->
    <a href="{{ route('admin.design.materi') }}" class="btn btn-secondary w-100 py-3 mb-5 mt-3">Materi</a>

    
    <!-- Kebijakan Perusahaan -->
    <div class="bg-secondary text-white text-center py-3 rounded">
        <h5 class="mb-0">Kebijakan Perusahaan</h5>
    </div>
</div>
@endsection