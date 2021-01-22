@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Validación</div>

        <div class="card-body">
          Ejemplos del sistema de validación de Laravel.
          <br/>
          <a href="{{ route('validation.index') }}" class="btn btn-primary mt-2">
            Ver ejemplos
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
