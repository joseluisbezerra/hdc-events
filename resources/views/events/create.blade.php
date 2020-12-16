@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Nome do evento">
            </div>

            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Local do evento">
            </div>

            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea class="form-control" name="description" id="description" placeholder="O que vai acontecer no evento?"></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
@endsection