@extends('layout')

@section('content')
  <h1>vista de Usuarios</h1>

  <ul>
    @forelse  ($users as $user)

      <li> {{ $user->name }} </li>

    @empty
      <li>No hay usuarios registrados</li>
    @endforelse
  </ul>
@endsection
