@extends('layouts.app')
@include('navbar')
@include('footer')
@section('content')
<body data-spy="scroll" data-target="#scrollspy" data-offset="20">
<div class="main">
    <div class="row">
        <div class="col-md-9">
            <h5 class="mt mb-2">確認画面</h5>
            <form class="new_post" enctype="multipart/form-data" action="{{ action('PostsController@send') }}" accept-charset="UTF-8" method="post">
                {{ csrf_field() }}
            <div id="top">
                
                @include('common.card_image_path')
                <h3 class="post_title mt">{{ $post->post_title }}</h3>
                
                @if ($post->post_comment)
                <h6 class="post_comment">{{$post->post_comment }}</h6>
                @endif
                <div class="profile-wrap">
                    <a class="no-text-decoration" href="/users/{{ $post->user->id }}">
                        @if ($post->user->profile_photo)
                        <img class="post-profile-icon round-img mr-4" src="{{ $post->user->profile_photo }}" />
                        @else 
                        <img class="post-profile-icon round-img mr-4" src="{{ secure_asset('/images/blank_profile.png') }}" />
                        @endif
                    <span>{{ $post->user->name }}</span>
                    </a>
                </div>
                
                <hr>
            </div>
            <div class="body">
                <div id="greeting">
                    <h7 class="paragrah">あいさつ</h7>
                    <p class="mt">{{ $post->post_first_greeting }}</p>
                </div>
                <p class="mt">{{ $post->post_introduction }}</p>
                <br>
                @if ($post->post_information)
                <h7 class="paragrah">インフォメーション</h7>
                <p class="mt">{{ $post->post_information }}</p>
                @endif
                
                @if ($post->post_character)
                <h7 class="paragrah">キャラクター</h7>
                <p class="mt">{{ $post->post_character }}</p>
                @endif
                
                @if ($post->post_story)
                <h7 class="paragrah">ストーリー</h7>
                <p class="mt">{{ $post->post_story }}</p>
                @endif
                
                @if ($post->post_spoiler)
                <div class="hidden_box">
                    <input type="checkbox" id="label1" />
                    <label for="label1">ネタバレ</label>
                    <div class="hidden_show">
                        <p>{{ $post->post_spoiler }}</p>
                    </div>
                </div>
                @endif
                
                <br>
                
                <div id="impression">
                    <h7 class="paragrah">感想</h7>
                    <p class="mt">{{ $post->post_one }}</p>
                </div> 
                
                @if ($post->post_two)
                <p class="mt">{{ $post->post_two }}</p>
                @endif
                
                @if ($post->post_three)
                <p class="mt">{{ $post->post_three }}</p>
                @endif        
                <br>
                
                <div id="summary">
                    <h7 class="paragrah">まとめ</h7>
                    <p class="mt">{{ $post->post_summary }}</p>
                    <p class="mt">{{ $post->post_last_greeting }}</p>
                </div>
            </div>
        </div>
        <nav class="col-md-3 d-none d-md-block" id="scrollspy">
            <ul class="nav nav nav-pills flex-column sticky-top">
                <li class="nav-item"><a href="#top" class="nav-link">トップ</a></li>
                <li class="nav-item"><a href="#greeting" class="nav-link">あいさつ</a></li>
                <li class="nav-item"><a href="#impression" class="nav-link">感想</a></li>
                <li class="nav-item"><a href="#summary" class="nav-link">まとめ</a></li>
            </ul>
        </nav>
            <div class="col post-button-panel">
                <button type="button" class="button" name="back" onclick=history.back()><i class="fas fa-chevron-left mr-2"></i>戻る</button>
                <button type="submit" class="button" name="submit">投稿する<i class="fas fa-chevron-right ml-2"></i></button>
            </div>
        </form>
    </div>
    
</div>
</body>

@endsection