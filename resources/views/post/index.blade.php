@extends('layouts.app')
@include('navbar')
@include('footer')
@section('content')
@foreach($posts as $post)
<div class="col-md-8 mx-auto">
    <div class="index-card-wrap">
        <div class="index-card-index">
            <div class="card-header-index align-items-center d-flex">
                <a class="no-text-decoration" href="/users/{{ $post->user->id }}">
                    @if($post->user->post_image_path)
                        <img class="post-profile-icon round-img mr-4" src="{{ secure_asset('storage/user_images/'. $post->user->profile_photo) }}" />
                    @else
                        <img class="post-profile-icon round-img mr-4" src="{{ secure_asset('/images/blank_profile.png') }}" />
                    @endif
                <span>{{ $post->user->name }}</span>
                </a>
            </div>
            
        </div>
    </div>
</div>
<div class="col-md-2 mx-auto">
    
</div>
@endforeach
@endsection