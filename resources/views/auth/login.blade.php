@extends('auth.contenido')

@section('login')
<div class="row justify-content-center login-wrap">
      <div class="col-md-12">
        <div class="card-group mb-0 login-content">
          <div class="card p-4 login-form">
          <form class="form-horizontal was-validated" method="POST" action="{{ route('login')}}">
          {{ csrf_field() }}
              <div class="card-body">
              <h1 class="text-center">Acceder</h1>
              <p class="text-muted">Control de acceso al sistema</p>

              <div class="form-group {{$errors->has('usuario' ? 'is-invalid' : '')}}">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="icon-user"></i>
                  </div>
                  <input class="form-control" type="text" value="{{old('usuario')}}" name="usuario" id="usuario" placeholder="Usuario">
                  {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}
                </div>
              </div>

              <div class="form-group {{$errors->has('password' ? 'is-invalid' : '')}}">
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="icon-lock"></i>
                  </div>
                  <input  type="password" name="password" id="password" placeholder="Password" class="form-control">
                  {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
                </div>
              </div>

              <div class="row">
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-success px-4">Acceder</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          
        </div>
      </div>
    </div>
@endsection
