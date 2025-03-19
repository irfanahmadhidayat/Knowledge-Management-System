@extends('layouts-page.app')

@section('title', 'Daftar Penugasan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="mb-3 text-primary"><i class="fas fa-tasks"></i> Daftar Penugasan</h3>
        </div>

        @foreach ($penugasans as $penugasan)
            <div class="col-md-4">
                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title text-dark font-weight-bold">
                            <i class="fas fa-clipboard-list"></i> {{ $penugasan->penugasan_name }}
                        </h5>
                        <p class="card-text text-muted">
                            {{ Str::limit($penugasan->penugasan_description, 30, '...') }}
                        </p>
                        <p class="card-text text-muted">
                            <i class="fas fa-clock"></i> Dibuat {{ $penugasan->created_at->locale('id')->diffForHumans() }}
                        </p>
                        <a href="{{ route('design-penugasan.show', $penugasan->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i> Lihat Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
