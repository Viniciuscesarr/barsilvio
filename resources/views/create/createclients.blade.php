@extends('layouts.header')

@section('title', 'Criar clientes')

@section('content')

    <main style="top: 50%">
        <form class="row g-3" method="POST" action="{{route('clients.index')}}">
            @csrf
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nome</label>
              <input type="text" name="name" class="form-control" id="inputEmail4" required>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Apelido</label>
                <input type="text" name="apelido" class="form-control" id="inputEmail4" required>
              </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Endereço</label>
              <input type="text" name="andress" class="form-control" id="inputAddress" placeholder="Ex: Rua dos bobos n°0" required>
            </div>
            <div class="col-12">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
          </form>
    </main>

@endsection