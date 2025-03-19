@extends('layouts-page.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach ($kebijakans as $kebijakan)
                <div class="col-12">
                    <div class="card shadow-sm mb-4 border-0">
                        <div class="card-header bg-primary">
                            <h5 class="m-0 text-white">{{ $kebijakan->title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted text-justify">
                                {{ Str::words($kebijakan->description, 50, '...') }}
                            </p>
                            <a href="{{ route('dashboard.show', $kebijakan->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i> Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @hasanyrole('admin|hr')
            <div class="row mt-4">
                <div class="col-sm-6 col-md-4">
                    <a href="{{ route('material.index') }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0">
                            <div class="card-body position-relative">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title text-primary">Total Materi</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="book"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totalMaterials }}</h1>
                                <div class="mb-0 text-muted">Jumlah materi yang telah tersedia</div>
                                <span class="stretched-link"></span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="{{ route('penugasan.index') }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0">
                            <div class="card-body position-relative">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title text-success">Total Penugasan</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-success">
                                            <i class="align-middle" data-feather="clipboard"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totalPenugasans }}</h1>
                                <div class="mb-0 text-muted">Jumlah tugas yang diberikan</div>
                                <span class="stretched-link"></span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="{{ route('hasil-penugasan.index') }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0">
                            <div class="card-body position-relative">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title text-danger">Total Hasil Tugas</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-danger">
                                            <i class="align-middle" data-feather="check-square"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totalHasilTugas }}</h1>
                                <div class="mb-0 text-muted">Jumlah tugas yang telah diselesaikan</div>
                                <span class="stretched-link"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endhasanyrole
    </div>
@endsection
