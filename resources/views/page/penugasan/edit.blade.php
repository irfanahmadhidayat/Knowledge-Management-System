@extends('layouts-page.app')

@section('title', 'Edit Penugasan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('penugasan.index') }}" class="btn btn-danger mb-2 py-1">Kembali</a>
        </div>
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header pb-0">
                    <h5 class="m-0">Edit Penugasan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('penugasan.update', $penugasan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="penugasan_name">Nama Materi</label>
                            <input type="text" name="penugasan_name" id="penugasan_name"
                                class="form-control @error('penugasan_name') is-invalid @enderror"
                                value="{{ old('penugasan_name', $penugasan->penugasan_name) }}"
                                placeholder="Enter penugasan_name">
                            @error('penugasan_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="penugasan_description">Deskripsi Materi</label>
                            <textarea name="penugasan_description" id="penugasan_description"
                                class="form-control @error('penugasan_description') is-invalid @enderror" rows="4"
                                placeholder="Masukkan deskripsi materi">{{ old('penugasan_description', $penugasan->penugasan_description) }}</textarea>
                            @error('penugasan_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label for="file">Upload File (JPG, PNG, PDF)</label>
                            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                            @if ($penugasan->file_path)
                                <p>File saat ini:
                                    <a href="{{ asset('storage/' . $penugasan->file_path) }}" target="_blank">Lihat File</a>
                                </p>
                            @endif
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="link">Link Materi (Opsional)</label>
                            <input type="url" name="link" class="form-control @error('link') is-invalid @enderror"
                                value="{{ old('link', $penugasan->link) }}">
                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="role_id">Tugas Untuk Divisi</label>
                            <select name="role_id" id="role_id"
                                class="form-control @error('role_id') is-invalid @enderror">
                                <option selected disabled>Pilih Divisi</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" @if ($role->id == $penugasan->role_id) selected @endif>
                                        {{ ucfirst($role->name) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
