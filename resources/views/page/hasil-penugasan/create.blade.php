@extends('layouts-page.app')

@section('title', 'Kirim Tugas')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ back()->getTargetUrl() }}" class="btn btn-danger mb-2 py-1">Kembali</a>
        </div>

        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('hasil-penugasan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="penugasan_id" value="{{ $penugasan->id }}">
                        <h3 class="m-0">Kirim Tugas untuk: {{ $penugasan->penugasan_name }}</h3>
                        <br>

                        <div class="form-group mb-3">
                            <label for="file">Upload File (JPG, PNG, PDF)</label>
                            <input type="file" name="file" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="link">Link Penugasan (Opsional)</label>
                            <input type="url" name="link" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="comment">Masukkan Pesan</label>
                            <textarea name="comment" class="form-control" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Tugas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
