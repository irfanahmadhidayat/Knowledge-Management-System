@extends('layouts-page.app')

@section('title', 'Category Create')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('category.index') }}" class="btn btn-danger mb-2 py-1">Kembali</a>
        </div>

        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header pb-0">
                    <h5 class="m-0">Tambah Kategori</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="category_name">Kategori</label>
                            <select name="category_name" id="category_name"
                                class="form-control @error('category_name') is-invalid @enderror">
                                <option selected>Pilih Kategori</option>
                                <option value="Materi">Materi</option>
                                <option value="Modul">Modul</option>
                                <option value="Kebijakan">Kebijakan</option>
                            </select>
                            @error('category_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
