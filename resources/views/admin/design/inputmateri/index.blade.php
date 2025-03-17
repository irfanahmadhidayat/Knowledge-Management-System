@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container p-3">
    <h4 class="bg-light p-2">Materi A</h4>
    <button class="btn btn-secondary btn-sm mb-2">Tambah Modul</button>
    
    <div class="card mb-3">
        <div class="card-header bg-secondary text-white">Install Corel Draw</div>
        <div class="card-body">
            <div class="p-2 mb-1">Modul 1</div>
            <div class="bg-light p-2">Praktik 1</div>
        </div>
    </div>
    
    <div class="card mb-3">
        <div class="card-header bg-secondary text-white">Uninstall Corel Draw</div>
        <div class="card-body">
            <div class="p-2 mb-1">Modul 2</div>
            <div class="bg-light p-2">Praktik 2</div>
        </div>
    </div>
    
    <div class="mb-3">
        <label for="feedback" class="form-label">Feedback</label>
        <textarea class="form-control" id="feedback" rows="3" placeholder="Masukkan feedback Anda..."></textarea>
        <button class="btn btn-primary mt-2">Kirim</button>
    </div>
    
    <div class="card mt-3">
        <div class="card-header">Diskusi</div>
        <div class="card-body">
            <div class="mb-3">
                <strong>User 1:</strong>
                <p>Bagian ini sangat membantu!</p>
            </div>
            <div class="mb-3">
                <strong>User 2:</strong>
                <p>Apakah ada langkah tambahan untuk instalasi?</p>
            </div>
            <input type="text" class="form-control" placeholder="Tulis komentar...">
            <button class="btn btn-secondary mt-2">Kirim</button>
        </div>
    </div>
</div>
@endsection
