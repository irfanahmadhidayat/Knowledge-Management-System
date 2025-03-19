@extends('layouts-page.app')

@section('title', 'Penugasan')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header pb-0">
                    {{-- @can('user-create') --}}
                    <a href="{{ route('penugasan.create') }}" class="btn btn-primary">Tambah Penugasan</a>
                    {{-- @endcan --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Materi</th>
                                    <th>Deskripsi</th>
                                    <th>File</th>
                                    <th>Link</th>
                                    <th>Penugasan Untuk Divisi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penugasans as $penugasan)
                                    <tr>
                                        <td>{{ $penugasan->penugasan_name }}</td>
                                        <td>{{ Str::limit($penugasan->penugasan_description, 50, '...') }}</td>
                                        <td>
                                            @if ($penugasan->file_path)
                                                <a href="{{ asset('storage/' . $penugasan->file_path) }}"
                                                    target="_blank">Lihat File</a>
                                            @else
                                                <span class="text-muted">Tidak ada gambar</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($penugasan->link)
                                                <a href="{{ $penugasan->link }}" target="_blank">Buka Link</a>
                                            @else
                                                <span class="text-muted">Tidak ada link</span>
                                            @endif
                                        </td>
                                        <td>{{ ucfirst($penugasan->role->name) }}</td>
                                        <td>
                                            <a href="{{ route('penugasan.edit', $penugasan->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ route('penugasan.show', $penugasan->id) }}"
                                                class="btn btn-info">Show</a>
                                            <form action="{{ route('penugasan.destroy', $penugasan->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
