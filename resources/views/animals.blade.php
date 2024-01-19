@extends('app')

@section('content')

<div class="card-body">

    <div class="modal" id="addModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel">Добавить зверя</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('animals') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col p-2">
                                        <label for="animal-kind" class="col form-label">Вид</label>
                                        <input type="text" name="kind" id="animal-kind" class="form-control"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col p-2">
                                        <label for="animal-name" class="col form-label">Имя</label>
                                        <input type="text" name="name" id="animal-name" class="form-control"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col p-2">
                                        <label for="animal-age" class="col form-label">Возраст</label>
                                        <input type="number" name="age" id="animal-age" class="form-control"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col p-2">
                                        <label for="animal-description" class="col form-label">Описание</label>
                                        <textarea type="text" name="description" id="animal-description" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div class="row row-cols-5">
            @foreach($animals as $animal)
            <div class="col p-2">
                <form action="{{ url('animals/'.$animal->id) }}" method="GET">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="{{ asset('images/unknown.png') }}" class="img-fluid p-2">
                        <div>Имя: {{ $animal->name }} Возраст: {{ $animal->age }}</div>
                        <div>Вид: {{ $animal->kind }}</div>
                        <button type="submit" class="btn btn-primary">Детали</button>
                    </div>
                </div>
                </form>
            </div>
            @endforeach
            <div class="col p-2">
                <div class="card h-100">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary h-100" data-bs-toggle="modal" data-bs-target="#addModal">
                            <img src="{{ asset('images/plus.png') }}" class="img-fluid">
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection