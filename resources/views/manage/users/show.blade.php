@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Perfil de Usuario</h1>
        
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('users.edit', $usuario->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Editar Usuario</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="name" class="label">Nombre</label>
          <pre>{{$usuario->name}}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" class="label">Email</label>
            <pre>{{$usuario->email}}</pre>
          </div>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" class="label">Roles</label>
            
              @forelse ($usuario->roles as $role)
                <pre><b>{{$role->display_name}}</b> ({{$role->description}})</pre>
              @empty
                <p>Este Usuario NO tiene Rol(es) asignado(s).</p>
              @endforelse
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
