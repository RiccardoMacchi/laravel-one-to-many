@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Ecco i dettagli di: {{ $item->title }}</h1>

        <div class="card text-center">
            <div class="card-header">
                {{ $item->lenguages }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ $item->description }}</p>
                <a href="{{ $item->git_link }}" class="btn btn-primary">Vai a GitHub</a>
            </div>
            <div class="card-footer text-muted">
                {{ $item->date }}
            </div>
        </div>
    </div>
@endsection
