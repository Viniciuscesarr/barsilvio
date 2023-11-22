@extends('layouts.header')

@section('title', 'Adicionar ao Estoque')

@section('content')

<main style="top: 50%">
    <form class="row g-3" method="POST" action="{{route('estoque.index')}}">
        @csrf
        <div class="col-md-6">
          <label for="name" class="form-label">Produto</label>
          <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="col-md-6">
            <label for="unidades" class="form-label">Unidades</label>
            <input type="number" name="unidades" class="form-control" id="unidades" required>
          </div>
        <div class="col-12">
          <label for="Valor" class="form-label">Valor</label>
          <input type="number" name="value" class="form-control" id="Valor" step="0.01" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
      </form>
</main>


@endsection