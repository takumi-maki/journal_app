@extends('layouts.app')
@include('navbar')
@section('content')


<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logoout-form').submit();">
サインアウト<br/></a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>


<p>このページは仮のページです。</p>

<a href="%" class="btn btn-secondary">仮のボタンです</a>

@endsection