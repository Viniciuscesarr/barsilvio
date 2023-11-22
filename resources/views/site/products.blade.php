@extends('layouts.header')

@section('title', 'estoque')

@section('content')

<main>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Unidades</th>
            <th scope="col">Preço</th>
          </tr>
        </thead>
        @foreach($products as $product)
        <tbody>
          <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}} </td>
            <td>{{$product->unidades}}</td>
            <td>{{$product->value}} 
                <form action="/estoque/{{ $product->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button id="delete">Deletar</button>

                </form>
                <a href="/estoque/edit/{{ $product->id }}"><button type="submit" id="edit"><p>Editar</p></button></a>
            </td>
        </tr>
        </tbody>
        @endforeach
      </table>
      <a href="{{ route('estoque.create') }}"><button class="btn btn-primary">Criar</button></a>
      
</main>

@endsection