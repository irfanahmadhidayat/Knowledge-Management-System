@extends('layouts-page.app')

@section('title', 'Detail Kebijakan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('kebijakan.index') }}" class="btn btn-danger mb-3">Kembali</a>
        </div>

        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary">
                    <h5 class="m-0 text-white">Detail Kebijakan</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th width="200px">Nama Kebijakan</th>
                            <td>{{ $kebijakan->title }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>{{ $kebijakan->description }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
