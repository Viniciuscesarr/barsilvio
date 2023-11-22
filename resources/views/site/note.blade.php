@extends('layouts.header')

@section('title', 'Notinhas')

@section('content')

<main>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
          </tr>
        </thead>
        @foreach($notes as $note)
        <tbody>
          <tr>
            <th scope="row">{{$note->id}}</th>
            <td>{{$note->name}} </td>
            <td>{{$note->value}} <a href="/notinhas/{{ $note->id }}"><button id="edit">Detalhes</button></a><form action="/notinhas/{{ $note->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button id="delete">Deletar</button>
            </form></td>
          </tr>
          
        </tbody>
        @endforeach
      </table>
      <a href="{{ route('notinhas.create') }}"><button class="btn btn-primary">Criar</button></a>
</main>


@endsection