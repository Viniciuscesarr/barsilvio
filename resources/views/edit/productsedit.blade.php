@extends('layouts.header')

@section('title', 'Editar')

@section('content')

<main style="top: 50%">
    <form class="row g-3" method="POST" action="/estoque/update/{{ $product->id }}">
        @csrf
        @method('PUT')
        <div class="col-md-6">
          <label for="name" class="form-label">Nome</label>
          <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}" required>
        </div>
        <div class="col-md-6">
            <label for="Unidades" class="form-label">Unidades</label>
            <input type="number" name="unidades" class="form-control" id="Unidades" step="0.1" value="{{$product->unidades}}" required>
          </div>
        <div class="col-12">
          <label for="value" class="form-label">Valor</label>
          <input type="number" step="0.1" name="value" class="form-control" id="value" value="{{$product->value}}" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
</main>

@endsection