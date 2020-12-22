@extends('layouts.app')
@include('footer')
@section('content')
<div class="main">
    <div class="card devise-card">
        <div class="form-wrap">
            <div class="form-group text-center">
                <h4>Sign up</h4>
                <p class="text-secondary">アカウントを作ろう</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-item">
                    <input placeholder="Mail address" autocomplete="email" type="email" name="email" value="{{ old('email') }}" required/>
                </div>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                
                <div class="form-item">
                    <input placeholder="User name" type="text" name="name" value="{{ old('name') }}" required/>
                </div>
                
                <div class="form-item">
                    <input placeholder="Password" autocomplete="off" type="password" name="password" required/>
                </div>
                @if($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="button-panel">
                    <input type="submit" class="button" title="sign up" value="sign up" />
                </div>
            </form>
            <br>
            <div class="form-footer">
                <p><a href="{{ route('login') }}">ログインする</a></p>
            </div>
        </div>
    </div>
</div>
@endsection