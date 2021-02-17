@extends('layouts.app')
@include('navbar')
@include('footer')
@section('content')

<!-- もしpost_typeが"lock"　かつ　閲覧ユーザーが本人でなければ　以下を表示する -->
@if($post->post_key == "lock" && Auth::user()->id != $post->user_id)
<h4>こちらは非公開の記事です</h4>

@else
<body data-spy="scroll" data-target="#scrollspy" data-offset="20">
<div class="main">
    <div class="row">

        <div class="col-md-9 mt">
            <div id="top">
                @include('common.top_image_path')
                <h3 class="post_title mt">{{ $post->post_title }}</h3>
                
                
                @if ($post->post_comment)
                <h6 class="post_comment">{{$post->post_comment }}</h6>
                @endif
                
                <div class="profile-wrap mt-4">
                    <a class="no-text-decoration" href="/users/{{ $post->user->id }}">
                        @if ($post->user->profile_photo)
                        <img class="post-profile-icon round-img mr-4" src="{{ secure_asset( $post->user->profile_photo }}" />
                        @else 
                        <img class="post-profile-icon round-img mr-4" src="{{ secure_asset('/images/blank_profile.png') }}" />
                        @endif
                    <span>{{ $post->user->name }}</span>
                    </a>
                </div>
                @if ($post->user_id == Auth::user()->id)
                    <a class="btn btn-light" href="/posts/edit?id={{ $post->id }}"><small>記事を編集</small><i class="fas fa-pen ml-2"></i></a>
                @endif
                
                @if ($post->likedBy(Auth::user())->count() > 0)
                <ul class="like-icon" style="text-align: left;">
                  <li>
                    <a class="no-text-decoration" data-remote="true" rel="nofollow" data-method="DELETE" href="/likes/{{ $post->likedBy(Auth::user())->firstOrFail()->id }}">
                      <img src="/images/parts7.png" />
                      <span>{{$post->likes->count() }} like</span>
                    </a>
                  </li>
                </ul>
                @else
                <ul class="like-icon" style="text-align: left;">
                  <li>
                    <a class="no-text-decoration" data-remote="true" rel="nofollow" data-method="POST" href="/posts/{{ $post->id }}/likes">
                      <img src="/images/parts5.png" />
                      <span>{{$post->likes->count() }} like</span>
                    </a>
                  </li>
                </ul>  
                @endif
                
                <small>投稿日:{{ $post->created_at->format('Y年m月d日') }}</small>
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
    </div>
</div>
@endif
</body>


@endsection
