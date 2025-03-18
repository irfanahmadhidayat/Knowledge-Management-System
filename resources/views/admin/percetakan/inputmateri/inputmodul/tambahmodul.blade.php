@extends('admin.layouts.app')

@section('title', 'Dashboard - Tambah Modul Percetakan')

@section('content')

<div>
    <h2><strong>Tambah Modul</strong></h2>
    <div class="card shadow-lg">
        <div class="card-header bg-primary">
            <h5 class="mb-0 text-white">*Tambahkan modul untuk divisi percetakan</h5>
        </div>
        <div class="card-body">
            <form>
                <!-- Pilih Materi -->
                <div class="mb-3">
                    <label for="materi_id" class="form-label">Materi</label>
                    <select class="form-select" id="materi_id" name="materi_id">
                        <option selected disabled>-- Pilih Materi --</option>
                        <option value="1">Materi A</option>
                        <option value="2">Materi B</option>
                    </select>
                </div>

                <!-- Pilih Anggota -->
                <div class="mb-3">
                    <label for="user_id" class="form-label">Anggota</label>
                    <select class="form-select" id="user_id" name="user_id">
                        <option selected disabled>-- Pilih Anggota --</option>
                        <option value="1">User 1</option>
                        <option value="2">User 2</option>
                    </select>
                </div>

                <!-- Judul Modul -->
                <div class="mb-3">
                    <label for="judul_modul" class="form-label">Judul Modul</label>
                    <input type="text" class="form-control" id="judul_modul" name="judul_modul" placeholder="Masukkan judul modul">
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi"></textarea>
                </div>

                <!-- Upload Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" onchange="previewImage(event)">
                    <img id="preview" src="#" class="mt-3 img-thumbnail" style="display: none; max-width: 200px;">
                </div>

                <!-- Upload PDF -->
                <div class="mb-3">
                    <label for="pdf" class="form-label">File PDF</label>
                    <input type="file" class="form-control" id="pdf" name="pdf" accept=".pdf">
                </div>

                <!-- Link URL -->
                <div class="mb-3">
                    <label for="link_url" class="form-label">Link URL</label>
                    <input type="url" class="form-control" id="link_url" name="link_url" placeholder="Masukkan URL jika ada">
                </div>

                <!-- Arsip -->
                <div class="mb-3">
                    <label for="archive" class="form-label">Arsip</label>
                    <input type="text" class="form-control" id="archive" name="archive" placeholder="Masukkan informasi arsip">
                </div>

                <!-- Tombol Aksi -->
                <button type="submit" class="btn btn-success">Simpan Modul</button>
                <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection