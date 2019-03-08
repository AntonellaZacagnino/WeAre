@extends('layouts.app')

@section('titulo')
Perfil de
@endsection

@section('content')
<ul>
  <li>Nombre: {{$usuario->name}}</li>
  <li>Fecha de nacimiento: {{$usuario->birthday_date}}</li>
  <li>Profesión: {{$usuario->profession}}</li>
</ul>

@if (Auth::check())
  SEGUIR
@endif

@endsection