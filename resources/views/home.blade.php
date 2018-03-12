@extends('layouts.app')

@section('content')
<section class="hero">
  <div class="hero-body">
    <div class="container">
        <pre>
            {{$user}}
        </pre>
      <h1 class="title">
        Dashboard: Panel 
      </h1>
      <h2 class="subtitle">
        administracion de [Nombre_Empresa]
      </h2>
      <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            Este es el PANEL de administrador! {{}}
        </div>
    </div>
  </div>
</section>

@endsection
