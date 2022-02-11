@extends('layouts.base')

@section('pageContent')

<div class="container">
    <h1>Crea Pizza</h1>
    <form action="{{route('pizzas.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nome pizza</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome della pizza">
    </div>
    <div class="form-group">
        <label for="price">Prezzo pizza</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="prezzo della pizza pizza">
    </div>
    <div class="form-group">
        <label for="description">Descrizione pizza</label>
        <textarea class="form-control" id="description" name="description" rows="8" placeholder="Inserisci descrizione della pizza"></textarea>
    </div>
    <div class="form-check">
        <label for="vegetarian">vegetarian</label>
        <input class="position-static" type="checkbox" id="vegetarian" name="vegetarian">
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
    
    </form>
</div>

@endsection
