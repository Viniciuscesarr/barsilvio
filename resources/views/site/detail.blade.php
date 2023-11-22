@extends('layouts.header')

@section('title', 'Detalhes')

@section('content')

<main style="top: 50%">
    <form>
        <fieldset disabled>
          <legend>Detalhes da notinha {{ $note->name }}</legend>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nome</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $note->name }}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Produtos</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $note->products }}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Valor:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $note->value }}">
          </div>
        </fieldset>
      </form>
      <a href="/notinhas/edit/{{ $note->id }}"><button class="btn btn-primary">Editar</button></a>
</main>

@endsection