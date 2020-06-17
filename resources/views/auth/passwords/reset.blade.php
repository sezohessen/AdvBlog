@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="notification is-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="container">
    <section class=" is-primary is-fullheight login">
        <div class="hero-body">
          <div class="container">
            <div class="columns is-centered">
              <div class="column is-5-tablet is-4-desktop is-5-widescreen">
                <h1 class="title">Reset your password</h1>
                <form action="{{ route('register') }}" class="box" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">
                    <div class="field">
                        <label for="" class="label">Email</label>
                        <div class="control has-icons-left">
                        <input type="email" name="email" required placeholder="email@gmail.com" class="input {{$errors->has('email') ? 'is-danger':''}}"  autocomplete="off" value="{{old('email')}}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <small class="is-danger">{{$errors->first('email')}}</small>
                            </span>
                        @endif
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                        </span>
                        </div>
                    </div>
                    <div class="field">
                        <label for="" class="label">Password</label>
                        <div class="control has-icons-left">
                        <input type="password" name="password" required placeholder="*******" class="input {{$errors->has('password') ? 'is-danger':''}}"  autocomplete="off">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <small class="is-danger">{{$errors->first('password')}}</small>
                            </span>
                        @endif
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                        </div>
                    </div>
                    <div class="field">
                        <label for="" class="label">Reset password</label>
                        <div class="control has-icons-left">
                        <input type="password" name="password" required placeholder="*******" class="input {{$errors->has('password') ? 'is-danger':''}}"  autocomplete="off">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <small class="is-danger">{{$errors->first('password')}}</small>
                            </span>
                        @endif
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                        </div>
                    </div>
                    <div class="field">
                        <button class="button is-outlined is-primary is-fullwidth">
                        Register
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Already have an account ?') }}
                            </a>
                        @endif
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>
@endsection
