@extends('layouts.app', ['class' => 'bg-gradient-primary'])

@section('css')

<link type="text/css" href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

@endsection

@section('content')

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                      <h4 class="text-primary"> 
                          <b>SMKN 1 AMPEK NAGARI</b>
                      </h4>
                    </div>
                  <hr>
                  <form method="POST" action="{{ route('login') }}" class="user">
                  @csrf
                    <div class="form-group">
                      <input type="username" name="username" class="form-control form-control-user{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" placeholder="username">

                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user{{ $errors->has('password') ? ' is-invalid' : '' }}"  placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    </div>
                    <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
                  </form>
                    <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('js')

<script src="{{ asset('js/argon.min.js') }}"></script>

@endsection
