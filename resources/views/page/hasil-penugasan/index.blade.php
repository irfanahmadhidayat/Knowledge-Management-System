@extends('layouts-page.app')

@section('title', 'Hasil Penugasan')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Pengirim</th>
                                    <th>Divisi</th>
                                    <th>Nama Penugasan</th>
                                    <th>Gambar/PDF</th>
                                    <th>Link</th>
                                    <th>Pesan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($tugass as $tugas)
                                    <tr>
                                        <td>{{ $tugas->user->name }}</td>
                                        <td>{{ ucfirst($tugas->user->getRoleName()) }}</td>
                                        <td>{{ $tugas->penugasan->penugasan_name }}</td>
                                        <td>
                                            @if ($tugas->file_path)
                                                <a href="{{ asset('storage/' . $tugas->file_path) }}" target="_blank">Lihat
                                                    File</a>
                                            @else
                                                <span class="text-muted">Tidak ada gambar</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($tugas->link)
                                                <a href="{{ $tugas->link }}" target="_blank">Buka Link</a>
                                            @else
                                                <span class="text-muted">Tidak ada link</span>
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($tugas->comment, 20, '...') }}</td>
                                        <td>
                                            <a href="{{ route('hasil-penugasan.show', $tugas->id) }}"
                                                class="btn btn-info">Show</a>
                                            {{-- @can('user-delete') --}}
                                            <form action="{{ route('hasil-penugasan.destroy', $tugas->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            {{-- @endcan --}}
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
