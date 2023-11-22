@extends('layouts.header')

@section('title', 'Editar clientes')

@section('content')

<main>
    <form action="/notinhas" method="POST">
        @csrf

        <label for="client">Cliente:</label>

        <select class="form-select" name="name" id="client">

            @foreach($clients as $client)
            <option value="{{$client->name}}">{{$client->name}}</option>
            @endforeach
            
        </select> <br>

        <label for="products">Produtos:</label>

            <select class="form-select" name="products" id="products">
                @foreach($products as $product)
                <option value="{{ $product->name }}">{{ $product->name }}</option>
                @endforeach
            </select>

        <label for="value">Valor:</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Valor</span>
            <input type="number" step="0.01" min="0" class="form-control" name="value" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
</main>

@endsection