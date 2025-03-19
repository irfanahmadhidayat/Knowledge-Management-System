@extends('layouts-page.app')

@section('title', 'Tambah Kebijakan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm mb-4 border-0">
                <div class="card-body">
                    <form action="{{ route('kebijakan.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="title">Nama</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') }}" placeholder="Masukkan nama kebijakan" required>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4"
                                placeholder="Masukkan deskripsi kebijakan" required>{{ old('description') }}</textarea>

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
