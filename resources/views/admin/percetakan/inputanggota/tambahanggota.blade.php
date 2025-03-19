@extends('admin.layouts.app')

@section('title', 'Dashboard - Anggota Percetakan')

@section('content')

<div>
    <h2><strong>Tambah Anggota</strong></h2>
    <div class="card shadow-lg">
        <div class="card-header bg-primary">
            <h5 class="mb-0 text-white">*Tambah Pengguna Baru divisi percetakan</h5>
        </div>
        <div class="card-body">
            <form>
                <!-- Nama Lengkap -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap">
                </div>

                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Role -->
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role">
                        <option selected disabled>-- Pilih Role --</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <!-- Arsip -->
                <div class="mb-3">
                    <label for="archive" class="form-label">Arsip</label>
                    <input type="text" class="form-control" id="archive" name="archive" placeholder="Masukkan informasi arsip">
                </div>

                <!-- Tombol Aksi -->
                <button type="submit" class="btn btn-success">Simpan Pengguna</button>
                <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>


@endsection