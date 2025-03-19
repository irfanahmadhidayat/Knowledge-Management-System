@extends('admin.layouts.app')

@section('title', 'Dashboard - Tambah Praktik Percetakan')

@section('content')

<div>
    <h2><strong>Tambah Praktik</strong></h2>
    <div class="card shadow-lg">
        <div class="card-header bg-primary">
            <h5 class="mb-0 text-white">*Tambahkan praktik untuk divisi percetakan</h5>
        </div>
        <div class="card-body">
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

                <!-- Pilih Modul -->
                <div class="mb-3">
                    <label for="modul_id" class="form-label">Modul</label>
                    <select class="form-select" id="modul_id" name="modul_id">
                        <option selected disabled>-- Pilih Modul --</option>
                        <option value="1">Modul A</option>
                        <option value="2">Modul B</option>
                    </select>
                </div>

                <!-- Judul Tugas -->
                <div class="mb-3">
                    <label for="judul_tugas" class="form-label">Judul Tugas</label>
                    <input type="text" class="form-control" id="judul_tugas" name="judul_tugas" placeholder="Masukkan judul tugas">
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi tugas"></textarea>
                </div>

                <!-- Deadline -->
                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="datetime-local" class="form-control" id="deadline" name="deadline">
                </div>

                <!-- Arsip -->
                <div class="mb-3">
                    <label for="archive" class="form-label">Arsip</label>
                    <input type="text" class="form-control" id="archive" name="archive" placeholder="Masukkan informasi arsip">
                </div>

                <!-- Tombol Aksi -->
                <button type="submit" class="btn btn-success">Simpan Tugas</button>
                <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

@endsection