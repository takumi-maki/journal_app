@extends('layouts.app')
<nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="/">
        <img src="/images/diary_logo.png" class="d-inline-block align-top" alt="logo" />
        <p class="navbar-text">journal</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-md-auto">
          <li class="nav-item">
            <a class="nav-link" href="/users/{{ Auth::user()->id }}"><i class="fas fa-user" style="margin-right: 1em;"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts/select"><i class="fas fa-pen" style="margin-right: 1em;"></i>write</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
@include('footer')
<div class="bg">
    <div class="container">
        <div class="row centered">
            <div class="col">
                @if ($user->profile_photo)
                <img class="round-img" src="{{ secure_asset('storage/user_images/'. $user->profile_photo) }}" />
                @else
                <img class="round-img" src="{{ secure_asset('/images/blank_profile.png') }}" />
                @endif
                <h4 class="profile-text">{{ $user->name }}</h4>
                @if ($user->id == Auth::user()->id)
                <a class="btn btn-light common-btn edit-profile-btn" href="/users/edit">プロフィールを編集 <i class="fas fa-user"></i></a>
                <a class="btn btn-light common-btn edit-profile-btn" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト  <i class="fas fa-sign-out-alt"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                @endif
                <p class="profile-text">{{ $user->introduction }}</p>
            </div>
        </div>
    </div>
</div>
@section('content')
<div class="row mt centered">
    <div class="col">
        <h5>投稿した記事</h5>
        <hr>
    </div>
</div>
<div class="row">
    @foreach ($posts as $post)
    @if($post->post_key == "open" || $user->id == Auth::user()->id)
    <div class="col-md-4 mb-5">
        @include('common.card')
    </div>
    @endif
    @endforeach 
</div>
{{ $posts->links('pagination::default') }}
@endsection