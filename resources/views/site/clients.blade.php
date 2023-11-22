@extends('layouts.header')

@section('title', 'Clientes')

@section('content')


<main>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Apelido</th>
            <th scope="col">Endereço</th>
          </tr>
        </thead>
        @foreach($clients as $client)
        <tbody>
          <tr>
            <th scope="row">{{$client->id}}</th>
            <td>{{$client->name}} </td>
            <td>{{$client->apelido}}</td>
            <td>{{$client->andress}} <form action="/clientes/{{$client->id}}" method="post">@csrf
                @method('DELETE')
                <button type="submit" id="delete"><p>Deletar</p></button></form>
                <a href="/clientes/edit/{{ $client->id }}"><button type="submit" id="edit"><p>Editar</p></button></a>
            </td>
          </tr>
          
        </tbody>
        @endforeach
      </table>
      <a href="{{route('clients.create')}}"><input class="btn btn-primary" type="button" value="Criar"></a>
</main>



  @endsection
