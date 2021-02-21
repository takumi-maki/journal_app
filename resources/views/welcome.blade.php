@extends('layouts.app')
@include('footer')
@section('content')
<div class="main">
    <div class="card">
        <div class="top-wrap">
            <div class="logo centered">
                <img src="{{ secure_asset('/images/top_logo.png' ) }}" alt="top_logo_img" class="top-logo-img" />
                <hr>
                <img src="{{ secure_asset('/images/show_header.jpg' ) }}" alt="header_img" class="top-page-img mt" />
            </div> 
            <div class="button-panel mt">
                <p class="centered">アカウントをつくって、記事を投稿しましょう</p>
                <br>
                <a href="{{ route('register') }}">
                    <input type="submit" class="button" title="sign up" value="sign up" />
                </a>
                <div class="form-footer centered mt">
                    <p>すでにアカウントがある人はこちらからです</p>
                    <p><a href="{{ route('login') }}">ログインする</a></p>
                </div>
            </div>
            <hr>
            <div class="m5">
                <h6 class="mt">journal とは</h6>
                <p>記事を自由に投稿して閲覧することができるプラットフォームです。</p>
                <br>
                <p>本を読んだあと、映画を観たあと、旅行をしたあと。自分が思ったこと、気づいたことを記事にしてみませんか？</p>
                <p>感想は人それぞれです。大切な思い出が詰まった、あなただけの記事を書いてみてください。</p>
                <br>
            </div>
            <br>
            
            <div class="m5">
                <h6 class="mt">journal の特徴</h6>
                <div class="centered"><i class="fas fa-pen fa-2x"></i></div>
                <br>
                <p>1.フレームワークに沿って文章を書けば、1000文字以上の記事を簡単につくれます。</p>
                <br>
                <div class="centered"><i class="fas fa-heart fa-2x"></i></div>
                <br>
                <p>2.他の人の記事に「like」を押して、思いを共有することができます。</p>
                <br>
                <div class="centered"><i class="fas fa-lock fa-2x"></i></div>
                <br>
                <p>3.記事を非公開にして、自分だけの日記用として活用することもできます。</p>
                <br>
            </div>
            <hr>
            <div class="m5">
                <h6 class="mt">journal 投稿の流れ</h6>
                <p>記事のジャンルを選ぶ</p>
                <img src="{{ secure_asset('/images/select.png' ) }}" alt="select_img" class="top-page-img" />
                <div class="centered mt"><i class="fas fa-arrow-down"></i></div>
                <p>投稿画面のフレームワークに沿って文章を書く</p>
                <img src="{{ secure_asset('/images/movie_form.png' ) }}" alt="movie_form_img" class="top-page-img" />
                <div class="centered mt"><i class="fas fa-arrow-down"></i></div>
                <p>投稿完了</p>
                <img src="{{ secure_asset('/images/complete.png' ) }}" alt="complete_img" class="top-page-img" />
            </div>    
            <hr>
            
            <div class="m5">
                <h6 class="mt">journal の思い</h6>
                
                <p>誰からも批判されないで自由に書ける、そんな記事投稿SNSアプリを作りました。</p>
                <p>皆さんには楽しんで記事を書いていただけたらと思います。</p>
            </div>
            
            
        </div>
    </div>
</div>
            
@endsection