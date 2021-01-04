@extends('layouts.app')
@include('navbar')
@include('footer')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 text-center">
            @if($user->profile_photo)
            <img class="round-img" src="{{ secure_asset('storage/user_images/'. $user->profile_photo) }}" />
            @else
            <img class="round-img" src="{{ secure_asset('/images/blank_profile.png') }}"/>
            @endif
            <h4  class="my-4">{{ $user->name }}</h4>
            @if($user->id == Auth::user()->id)
                <a class="btn btn-outline-dark common-btn edit-profile-btn" href="/users/edit">プロフィールを編集 <i class="fas fa-user-cog"></i></a>
                <a class="btn btn-outline-dark common-btn edit-profile-btn" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト  <i class="fas fa-sign-out-alt"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            @endif
            <div class="list-group">
                <p class="list-group-item">{{ $user->email }}</p>
                @if($user->introduction)
                <p class="list-group-item">{{ $user->introduction }}</p>
                @endif
            </div>
        </div>
        <div class="col-lg-9">
            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" />
                <div class="card-body">
                <h2 class="card-title">Post Title</h2></div>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <div class="button-panel">
                    <input type="submit" class="button" title="read more" value="read more" />
                </div>
                <div class="card-footer text-muted">
                    Posted on December 26, 2020 by
                </div>
            </div>
            <di class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Title1</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <p>like 2</p>
                        </div>
                        <div class="button-panel">
                            <input type="submit" class="button" title="Read more" value="Read more" />
                        </div>
                        <div class="card-footer text-muted">
                            Posted on December 23, 2020 by
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Title2</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <p>like 2</p>
                        </div>
                        <div class="button-panel">
                            <input type="submit" class="button" title="Read more" value="Read more" />
                        </div>
                        <div class="card-footer text-muted">
                            Posted on December 23, 2020 by
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Title3</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <p>like 2</p>
                        </div>
                        <div class="button-panel">
                            <input type="submit" class="button" title="Read more" value="Read more" />
                        </div>
                        <div class="card-footer text-muted">
                            Posted on December 23, 2020 by
                        </div>
                    </div>
                </div>
            </di>
        </div>
    </div>
</div>
@endsection