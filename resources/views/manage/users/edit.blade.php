@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit User</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('users.update', $user->id)}}" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">Name:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            
            <div class="field">
              <b-radio name="password_options" v-model="radio" native-value="keep" size="is-medium">Mantener la misma Password</b-radio>
            </div>
            <div class="field">
              <b-radio name="password_options" v-model="radio" native-value="auto" size="is-medium" >Auto-Generar Nueva Password</b-radio>
            </div>
            <div class="field">
              <b-radio name="password_options" v-model="radio" native-value="manual" size="is-medium" >Manualmente Set Nueva Password</b-radio>
            </div>
            <div class="field">
              <p class="control">
                <input type="text" name="password" id="password" class="input" v-if="radio == 'manual'" placeholder="Escribe tu password">
              </p>
            </div>
            <!--<div class="field">
              <input v-model="mensajito">
                
            </div>-->
   

          </div>
        </div> <!-- end of .column -->

        <div class="column">
          <label for="roles" class="label">Roles:</label>
          <input type="hidden" name="roles" :value="rolesSelected" />

            @foreach ($roles as $role)
              <div class="field">
                <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
              </div>
            @endforeach
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">Edit User</button>
        </div>
      </div>
    </form>

  </div> <!-- end of .flex-container -->
@endsection


@section('scripts')
  <script>

    var app = new Vue({
      el: '#app',
      data: {
        radio: 'keep',
        //password_options: 'manual',}}
        rolesSelected: {!! $user->roles->pluck('id') !!},
        mensajito: 'TREMENDO',

      }
    });

  </script>
@endsection