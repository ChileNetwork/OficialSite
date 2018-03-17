@extends('layouts.app')

@section('content')
<section class="hero">
  <div class="hero-body">
    <div class="container">
        <pre>
            
        </pre>
      <h1 class="title">
        Panel de Administracion <br>
        Usuario: <span style="color:red;"> {{Auth::user()->name}}</span>
      </h1>
      <h2 class="subtitle">
        [Tu-Empresa]
      </h2>
      <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

        
        </div>
    </div>
  </div>
</section>

@endsection
