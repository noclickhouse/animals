@extends('app')

@section('content')

<div class="card-body">
    <div class="row">
        <div class="col">
            <form action="{{ url('animals') }}" method="GET">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-primary">Назад</button>
            </form>
            <h1 class="p-2">{{ $animal->name }}</h1>
            <h4 class="p-2">Вид: {{ $animal->kind }} Возраст: {{ $animal->age }}</h4>
            <h4 class="p-2">{{ $animal->description }}</h4>
            <form action="{{ url('animals/'.$animal->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
        </div>
        <div class="col">
            <img src="{{ asset('images/unknown.png') }}" class="img-fluid p-4">
        </div>
    </div>
</div>

@endsection