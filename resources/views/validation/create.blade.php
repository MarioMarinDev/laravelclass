@extends('layouts.main')

@section('content')

<h3>Crear un nuevo objeto</h3>

@include('partials.validation.form', [
  'edit' => false,
  'back' => $back
])

@endsection
