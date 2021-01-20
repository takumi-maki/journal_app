@extends('layouts.app')
@include('navbar')
@section('content')

<a class="btn btn-outline-dark common-btn edit-profile-btn" href="/posts/new/movie">映画</a>
<a class="btn btn-outline-dark common-btn edit-profile-btn" href="/posts/new/book">本</a>
<a class="btn btn-outline-dark common-btn edit-profile-btn" href="/posts/new/life">日常</a>


@endsection