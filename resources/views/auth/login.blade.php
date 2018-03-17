@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-half is-offset-one-quarter m-t-45 ">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Entrar a mi Cuenta</h1>
                     <form action="{{route('login')}}" method="POST" role="form">
          {{csrf_field()}}
          <div class="field">
            <label for="email" class="label">Email Address</label>
            <p class="control">
              <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
            </p>
            @if ($errors->has('email'))
              <p class="help is-danger">{{$errors->first('email')}}</p>
            @endif
          </div>
          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
            </p>
            @if ($errors->has('password'))
              <p class="help is-danger">{{$errors->first('password')}}</p>
            @endif

          </div>
          <!--<b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>-->
            <label class="checkbox"> <input type="checkbox" name="remember"> Recuerdame </label>
          <button class="button is-success is-outlined is-fullwidth m-t-30">Entrar</button>
        </form>
                </div>
                <h5 class="has-text-centered"><a href="{{route('password.request')}}" class="is-muted">Olvidé mi Clave</a></h5>
            </div>
        </div>
        
    </div>

@endsection
