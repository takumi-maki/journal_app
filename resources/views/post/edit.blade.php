@extends('layouts.app')
@include('navbar')
@include('footer')
@section('content')
@include('common.errors')
<div class="main">
    <div class="row">
        <div class="col">
        <h5>編集する</h5>
            <form class="edit_post" enctype="multipart/form-data" action="/posts/update" accept-charset="UTF-8" method="post">
                <input name="utf8" type="hidden" value="&#x2713;" />
                <input type="hidden" name="id" value="{{ $post->id }}" />
                {{csrf_field()}} 
                <div class="form-group">
                    @include('common.card_image_path')
                    <label for="post_image_path">画像を変更する</label><br>
                    <input type="file" name="post_image_path"  value="{{ old('post_image_path',$post->id) }}" accept="image/jpeg,image/gif,image/png" />
                </div>
                
                <div class="form-item">
                    <label for="post_title">必須<i class="fas fa-check-square ml-1 mr-1"></i>：タイトル</label>
                    <textarea rows="2" text="text" name="post_title">{{ old('post_title', $post->post_title) }}</textarea>
                </div>
                
                @if ($post->post_comment)
                <div class="form-item">
                    <label for="post_last_greeting">帯コメント</label>
                    <textarea rows="2" text="text" name="post_comment">{{ old('post_comment', $post->post_comment) }}</textarea>
                </div>
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
                <br>
                <small>投稿日:{{ $post->created_at->format('Y年m月d日') }}</small>
                <hr>
                
                <div class="form-item">
                    <label for="post_first_greeting">必須<i class="fas fa-check-square ml-1 mr-1"></i>：はじめのあいさつ</label>
                    <textarea rows="2" text="text" name="post_first_greeting">{{ old('post_first_greeting', $post->post_first_greeting) }}</textarea> 
                </div>

                
                <div class="form-item">
                    <label for="post_introduction">必須<i class="fas fa-check-square ml-1 mr-1"></i>：話題の導入</label>
                    <textarea rows="5" text="text" name="post_introduction">{{ old('post_introduction', $post->post_introduction) }}</textarea>
                </div>
                
                
                @if ($post->post_information)
                <div class="form-item">
                    <label for="post_information">概要</label>
                    <textarea rows="5" text="text" name="post_information">{{ old('post_information', $post->post_information) }}</textarea>
                </div>
                
                @endif
                
                @if ($post->post_character)
                <div class="form-item">
                    <label for="post_character">主要キャラクター</label>
                    <textarea rows="5" text="text" name="post_character">{{ old('post_character', $post->post_character) }}</textarea> 
                </div>

                @endif
                
                @if ($post->post_story)
                <div class="form-item">
                    <label for="post_story">物語</label>
                    <textarea rows="5" text="text" name="post_story">{{ old('post_story', $post->post_story) }}</textarea>
                </div>
                
                @endif
                
                @if ($post->post_spoiler)
                <div class="form-item">
                    <label for="post_spoiler">作品のネタバレ</label>
                    <textarea rows="5" text="text" name="post_spoiler">{{ old('post_spoiler', $post->post_spoiler) }}</textarea> 
                </div>
                
                @endif
                
                <div class="form-item">
                    <label for="post_one">必須<i class="fas fa-check-square ml-1 mr-1"></i>：感想①</label>
                    <textarea rows="10" text="text" name="post_one">{{ old('post_one', $post->post_one) }}</textarea>
                </div>
                
                @if ($post->post_two)
                <div class="form-item">
                    <label for="post_two">感想②</label>
                    <textarea rows="10" text="text" name="post_two">{{ old('post_two', $post->post_two) }}</textarea>
                </div>
                @endif
                
                @if ($post->post_three)
                <div class="form-item">
                    <label for="post_three">感想③</label>
                    <textarea rows="10" text="text" name="post_three">{{ old('post_three', $post->post_three) }}</textarea>
                </div>
                @endif        
                
                
                <div class="form-item">
                    <label for="post_summary">必須<i class="fas fa-check-square ml-1 mr-1"></i>：まとめ</label>
                    <textarea rows="5" text="text" name="post_summary">{{ old('post_summary', $post->post_summary) }}</textarea>
                </div>
                <div class="form-item">
                    <label for="post_last_greeting">必須<i class="fas fa-check-square ml-1 mr-1"></i>：最後のあいさつ</label>
                    <textarea rows="2" text="text" name="post_last_greeting">{{ old('post_last_greeting', $post->post_last_greeting) }}</textarea>
                </div>
                <br>
                <div class="radio-container">
                  <div class="radio">
                    <input id="open" name="post_key" type="radio" value="open" checked>
                    <label for="open" class="radio-label">公開</label>
                  </div>
                
                  <div class="radio">
                    <input id="lock" name="post_key" type="radio" value="lock">
                    <label  for="lock" class="radio-label">非公開</label>
                  </div>
                </div>
                <br>
                <div class="button-panel">
                    <input type="submit" class="button" name="commit" value="更新する" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
