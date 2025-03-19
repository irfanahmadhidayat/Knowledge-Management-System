@extends('admin.layouts.app')

@section('title', 'Dashboard - Tambah Materi Percetakan')

@section('content')

<div>
    <!--title-->
    <h2><strong>Tambah Materi</strong></h2>
    <div class="card shadow-lg">
        <div class="card-header bg-primary">
            <h5 class="mb-0 text-white">*Tambahkan materi untuk divisi percetakan</h5>
        </div>
        <div class="card-body">
            <!-- Form Tambah Materi -->
            <form>
                <!-- Pilih Anggota -->
                <div class="mb-3">
                    <label for="user_id" class="form-label">Anggota</label>
                    <select class="form-select" id="user_id" name="user_id">
                        <option selected disabled>-- Pilih Anggota --</option>
                        <option value="1">User 1</option>
                        <option value="2">User 2</option>
                    </select>
                </div>

                <!-- Pilih Kategori -->
                <div class="mb-3">
                    <label for="category_id" class="form-label">Kategori</label>
                    <select class="form-select" id="category_id" name="category_id">
                        <option selected disabled>-- Pilih Kategori --</option>
                        <option value="1">Kategori A</option>
                        <option value="2">Kategori B</option>
                    </select>
                </div>

                <!-- Nama Materi -->
                <div class="mb-3">
                    <label for="materials_name" class="form-label">Nama Materi</label>
                    <input type="text" class="form-control" id="materials_name" name="materials_name" placeholder="Masukkan nama materi">
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukkan deskripsi materi"></textarea>
                </div>

                <!-- Arsip -->
                <div class="mb-3">
                    <label for="archive" class="form-label">Arsip</label>
                    <input type="text" class="form-control" id="archive" name="archive" placeholder="Masukkan informasi arsip">
                </div>

                <!-- Tombol Aksi -->
                <button type="submit" class="btn btn-success">Simpan Materi</button>
                <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

@endsection