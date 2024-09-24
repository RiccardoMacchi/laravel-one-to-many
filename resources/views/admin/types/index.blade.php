@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <form action="{{ route('admin.types.store') }}" method="POST">
            @csrf
            <label for="name">INSERISCI UN NUOVO TIPO:</label>
            <input type="text" name="name" placeholder="Inserisci un nuovo tipo">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i></button>
        </form>
        <ul class="list-group list-group-flush">
            @foreach ($types as $type)
                <li class="d-flex justify-content-between list-group-item">{{ $type->name }}
                    <span>
                        @include('admin.partials.formdelete', [
                            'route' => route('admin.types.destroy', $type),
                            'message' => "vuoi veramente eliminare $type->name",
                        ])
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
