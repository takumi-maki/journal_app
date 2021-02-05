@extends('layouts.app')
@include('navbar')
@include('footer')
@section('content')
<div class="main">
    <h6 class="mt">書きたい記事のジャンルを選んでください</h6>
    <hr>
    <div class="row">
        <div class="post-type col-md-4 col-sm-6 ">
            <a class="card-next" href="/posts/new/book">
                書籍
                <img src="/images/book.jpg" />
            </a>
        </div>
        <div class="post-type col-md-4 col-sm-6 ">
            <a class="card-next" href="/posts/new/business">
                仕事
                <img src="/images/business.jpg" />
            </a>
        </div>
        <div class="post-type col-md-4 col-sm-6 ">
            <a class="card-next" href="/posts/new/daily">
                日常
                <img src="/images/daily.jpg" />
            </a>
        </div>
        <div class="post-type col-md-4 col-sm-6 ">
            <a class="card-next" href="/posts/new/hobby">
                趣味
                <img src="/images/hobby.jpg" />
            </a>
        </div>
        <div class="post-type col-md-4 col-sm-6 ">
            <a class="card-next" href="/posts/new/movie">
                映画
                <img src="/images/movie.jpg" />
            </a>
        </div>
        <div class="post-type col-md-4 col-sm-6">
            <a class="card-next" href="/posts/new/society">
                社会
                <img src="/images/society.jpg" />
            </a>
        </div>
        <div class="post-type col-md-4 col-sm-6">
            <a class="card-next" href="/posts/new/sport">
                運動
                <img src="/images/sport.jpg" />
            </a>
        </div>
        <div class="post-type col-md-4 col-sm-6 ">
            <a class="card-next" href="/posts/new/study">
                学習
                <img src="/images/study.jpg" />
            </a>
        </div>
        <div class="post-type col-md-4 col-sm-6">
            <a class="card-next" href="/posts/new/travel">
                旅行
                <img src="/images/travel.jpg" />
            </a>
        </div>
    </div>
</div>
@endsection