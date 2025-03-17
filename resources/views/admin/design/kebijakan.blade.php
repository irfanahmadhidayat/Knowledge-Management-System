@extends('admin.layouts.app')

@section('title', 'Dashboard - Informasi')

@section('content')
<div class="container mt-5">
    <!-- Informasi -->
    <div class="bg-light p-4 rounded shadow-sm border">
        <h4 class="mb-3 fw-bold">kebijakan Perusahaan</h4>
        <textarea class="form-control" rows="5" placeholder="Masukkan informasi..."></textarea>
    </div>

    <!-- Kolaborasi -->
    <div class="mt-3">
        <a href="#" class="btn btn-secondary w-20 py-2">Submit</a>
    </div>
</div>
@endsection
