@extends('layouts-page.app')

@section('title', 'Tambah Materi')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('material.index') }}" class="btn btn-danger mb-2 py-1">Kembali</a>
        </div>

        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header pb-0">
                    <h5 class="m-0">Tambah Materi</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('material.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="material_name">Nama Materi</label>
                            <input type="text" name="material_name" id="material_name"
                                class="form-control @error('material_name') is-invalid @enderror"
                                value="{{ old('material_name') }}" placeholder="Masukkan nama materi">
                            @error('material_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="material_description">Deskripsi Materi</label>
                            <textarea name="material_description" id="material_description"
                                class="form-control @error('material_description') is-invalid @enderror" rows="4"
                                placeholder="Masukkan deskripsi materi">{{ old('material_description') }}</textarea>
                            @error('material_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="file">Upload File (JPG, PNG, PDF)</label>
                            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="link">Link Materi (Opsional)</label>
                            <input type="url" name="link" class="form-control @error('link') is-invalid @enderror"
                                value="{{ old('link') }}" placeholder="Masukkan link">
                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="role_id">Materi Untuk Divisi</label>
                            <select name="role_id" id="role_id"
                                class="form-control @error('role_id') is-invalid @enderror">
                                <option selected disabled>Pilih Divisi</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
