@extends('layouts.app')
@include('footer')
@section('content')
<div calss="main">
    <div class="card card-devise">
        <div class="form-wrap">
            <div class="form-group text-center">
                <h4>Log in</h4>
                <p class="text-secondary">管理者用ページ</p>
            </div>
            @if ($errors->any())
            <div style="color: #f16272;">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form method="post" action="{{ url('admin/login') }}">
                {{ csrf_field() }}
                <div class="form-item">
                    <input placeholder="User id" type="text" name="user_id" value="" />
                </div>
                <div class="form-item">
                    <input placeholder="Password" autocomplete="off" type="password" name="password" required/>
                </div>
                <div class="button-panel">
                    <input type="submit" class="button" title="admin.sign in" value="sign in" />
                </div>
            </form>
            <br>
            <div class="form-footer">
                <p><a href="/login">ユーザー ログインページ</a></p>
            </div>
        </div>
    </div>
</div>
@endsection

