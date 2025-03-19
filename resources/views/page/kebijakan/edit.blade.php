@extends('layouts-page.app')

@section('title', 'Edit Kebijakan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('kebijakan.index') }}" class="btn btn-danger mb-3">Kembali</a>
        </div>

        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary">
                    <h5 class="m-0 text-white">Edit Kebijakan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('kebijakan.update', $kebijakan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="title">Nama</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title', $kebijakan->title) }}" placeholder="Masukkan nama kebijakan"
                                required>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4"
                                placeholder="Masukkan deskripsi kebijakan" required>{{ old('description', $kebijakan->description) }}</textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
