@extends('layouts-page.app')

@section('title', 'Kebijakan Perusahaan')

@section('extra-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header pb-0">
                    @if ($kebijakans->isEmpty())
                        <a href="{{ route('kebijakan.create') }}" class="btn btn-primary">Tambah Kebijakan</a>
                    @endif
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kebijakans as $kebijakan)
                                    <tr>
                                        <td>{{ $kebijakan->title }}</td>
                                        <td>{{ Str::limit($kebijakan->description, 70, '...') }}</td>
                                        <td>
                                            <a href="{{ route('kebijakan.edit', $kebijakan->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ route('kebijakan.show', $kebijakan->id) }}"
                                                class="btn btn-info">Show</a>
                                            <form action="{{ route('kebijakan.destroy', $kebijakan->id) }}" method="POST"
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

@section('extra-js')
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
