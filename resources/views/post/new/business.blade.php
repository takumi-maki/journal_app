@extends('layouts.app')
@include('navbar')
@section('content')
<div class="main">
@include('common.errors')
    <div class="card devise-card">
        <div class="form-group">
            <h4 align="center">write</h4>
            <p class="text-center">仕事をしてて思ったことを書きましょう。</p>
            <form class="new_post" enctype="multipart/form-data" action="{{ action('PostsController@confirm') }}" accept-charset="UTF-8" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="post_type" value="business" />
                <div class="form-group">
                    <label for="post_image_path">画像や写真を貼る</label><br>
                    <i class="far fa-hand-point-right "></i><small class="text-secondary">　(ヒント：画像や写真がなければこちらで指定した画像を挿入します。画像ファイルのサイズは2MBまでです。)<br></small>
                    
                    <input type="file" name="post_image_path" accept="image/jpeg, image/gif, image/png, image/jpg" />
                </div>
                <div class="form-item">
                    <label for="post_title">必須<i class="fas fa-check-square ml-1 mr-1"></i>：タイトル</label>
                    <textarea rows="2" text="text" name="post_title">{{ old('post_title') }}</textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：タイトルを教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_first_greeting">必須<i class="fas fa-check-square ml-1 mr-1"></i>：はじめのあいさつ</label>
                    <textarea rows="2" text="text" name="post_first_greeting">{{ old('post_first_greeting') }}</textarea> 
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：簡単で良いので、自己紹介と近況を教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_introduction">必須<i class="fas fa-check-square ml-1 mr-1"></i>：話題の導入</label>
                    <textarea rows="5" text="text" name="post_introduction">{{ old('post_introduction') }}</textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：この記事を書こうと思ったきっかけ　等)</small>
                </div>
                <br>
                
                <div class="form-item">
                    <label for="post_character">主要キャラクター</label>
                    <textarea rows="5" text="text" name="post_character">{{ old('post_character') }}</textarea> 
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：登場人物が居たら教えてもらえますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_story">その趣味をしてた時の出来事</label>
                    <textarea rows="5" text="text" name="post_story">{{ old('post_story') }}</textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：具体的に何が起こったのか教えてもらえますか？)</small>
                </div>
                <br>
                
                <div class="form-item">
                    <label for="post_one">必須<i class="fas fa-check-square ml-1 mr-1"></i>：そのことで思ったことや気付いたこと①</label>
                    <textarea rows="10" text="text" name="post_one">{{ old('post_one') }}</textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：1つめの感想とそう思った理由を教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_two">そのことで思ったことや気付いたこと②</label>
                    <textarea rows="10" text="text" name="post_two">{{ old('post_two') }}</textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：2つめの感想とそう思った理由を教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_three">そのことで思ったことや気付いたこと③</label>
                    <textarea rows="10" text="text" name="post_three">{{ old('post_three') }}</textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：3つめの感想とそう思った理由を教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_summary">必須<i class="fas fa-check-square ml-1 mr-1"></i>：まとめ</label>
                    <textarea rows="5" text="text" name="post_summary">{{ old('post_summary') }}</textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：簡単にまとめてみてください。)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_last_greeting">必須<i class="fas fa-check-square ml-1 mr-1"></i>：最後のあいさつ</label>
                    <textarea rows="2" text="text" name="post_last_greeting">{{ old('post_last_greeting') }}</textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：締めのあいさつをしていただけますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_last_greeting">帯コメント</label>
                    <textarea rows="2" text="text" name="post_comment">{{ old('post_comment') }}</textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：帯コメも書いてくれませんか？)</small>
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
                    <input type="submit" class="button" name="submit" value="確認する" />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection