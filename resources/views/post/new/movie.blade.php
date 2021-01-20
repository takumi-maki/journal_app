@extends('layouts.app')
@include('navbar')
@section('content')
<div class="main">
@include('common.errors')
    <div class="card devise-card">
        <div class="form-group">
            <h4 align="center">write</h4>
            <p class="text-center">映画を観て思ったことを書こう。感想は人それぞれです。</p>
            <form class="new_movie" id="new_movie" enctype="multipart/form-data" action="{{ url('posts') }}" accept-charset="UTF-8" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="post_type" value="movie" />
                <div class="form-group">
                    <label for="image">画像や写真を貼る</label><br>
                    <input type="file" name="image" accept="image/jpeg, image/gif, image/png, image/jpg" />
                </div>
                <div class="form-item">
                    <label for="post_title">※タイトル</label>
                    <textarea rows="2" text="text" name="post_title"></textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：映画のタイトルを教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_first_greeting">※はじめのあいさつ</label>
                    <textarea rows="2" text="text" name="post_first_greeting"></textarea> 
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：あなたの近況を教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_introduction">※話題の導入</label>
                    <textarea rows="5" text="text" name="post_introduction"></textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：なぜその映画を観たのですか？　誰と一緒に観ましたか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_information">※映画の概要</label>
                    <textarea rows="5" text="text" name="post_introduction"></textarea> 
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：監督は誰ですか？　原作はありますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_character">主要キャラクター</label>
                    <textarea rows="5" text="text" name="post_character"></textarea> 
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：目立ったキャラクターは居ましたか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_story">作品の物語</label>
                    <textarea rows="5" text="text" name="post_story"></textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：どんな内容の物語でしたか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_spoiler">作品のネタバレ</label>
                    <textarea rows="5" text="text" name="post_spoiler"></textarea> 
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：最後のオチも教えてもらえますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_one">※感想①</label>
                    <textarea rows="10" text="text" name="post_one"></textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：1つめの感想とそう思った理由を教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_two">感想②</label>
                    <textarea rows="10" text="text" name="post_two"></textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：2つめの感想とそう思った理由を教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_three">感想③</label>
                    <textarea rows="10" text="text" name="post_three"></textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：3つめの感想とそう思った理由を教えてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_summary">※まとめ</label>
                    <textarea rows="5" text="text" name="post_summary"></textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：まとめると映画を観て良かったですか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_last_greeting">※最後のあいさつ</label>
                    <textarea rows="2" text="text" name="post_last_greeting"></textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：簡単で良いので締めてくれますか？)</small>
                </div>
                <br>
                <div class="form-item">
                    <label for="post_last_greeting">帯コメント</label>
                    <textarea rows="2" text="text" name="post_comment"></textarea>
                    <i class="far fa-hand-point-right"></i><small class="text-secondary">　(ヒント：映画の内容についての帯コメを書いてくれませんか？)</small>
                </div>
                <br>
                <div class="button-panel">
                    <input type="submit" class="button" name="submit" value="post" >
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#post_image').bind('change', function() {
        var size_in_megabytes = this.files[0].size/1024/1024;
        if(size_in_megabytes > 1) {
        alert('ファイルのサイズは最大1MBまでです。すみません。');
    });
</script>

@endsection