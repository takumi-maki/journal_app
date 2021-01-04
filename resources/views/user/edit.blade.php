@extends('layouts.app')
@include('navbar')
@include('footer')
@include('common.errors')
@section('content')
<div class="col-md-offset-2 mb-4 edit-profile-wrapper">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="form-wrap">
                <div class="form-group text-center">
                    <h4>To edit</h4>
                    <p class="text-secondary">プロフィールを編集する</p>
                </div>
                <form class="edit_user" enctype="multipart/form-data" action="/users/update" accept-charset="UTF-8" method="post">
                    <input name="utf8" type="hidden" value="&#x2713;" />
                    <input type="hidden" name="id" value="{{ $user->id }}" />
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="user_profile_photo">プロフィール写真</label>
                        @if($user->profile_photo)
                        <img src="{{ secure_asset('storage/user_images/'. $user->profile_photo) }}" alt="avatar" width="300px" />
                        @endif
                        <input type="file" name="user_profile_photo" value="{{ old('user_profile_photo', $user->id) }}" accept="image/jpeg, image/gif, image/png" />
                    </div>
                    <div class="form-item">
                        <label for="user_name">名前</label>
                        <input autofocus="autofocus" text="text" value="{{ old('user_name', $user->name) }}" name="user_name" />
                    </div>
                    <br>
                    <div class="form-item">
                        <label for="introduction">自己紹介</label><br>
                        <textarea rows="10" text="text" name="introduction">{{ old('introduction', $user->introduction) }}</textarea>
                    </div>
                    <br>
                    <div class="form-item">
                        <label for="user_email">メールアドレス</label>
                        <input text="email" value="{{ old('user_email', $user->email) }}" name="user_email" />
                    </div>
                    <br>
                    <div class="form-item">
                        <label for="user_password">パスワード</label>
                        <input text="password" name="user_password" />
                    </div>
                    <br>
                    <div class="form-item">
                        <label for="user_password_confirmation">パスワードの確認</label>
                        <input autofocus="autofocus" text="password" name="user_password_confirmation" />
                    </div>
                    <br>
                    <div class="button-panel">
                        <input type="submit" class="button" title="To edit" value="to edit" data-disable-with="変更する" />
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection