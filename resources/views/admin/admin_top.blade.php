@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">admin top</div>
        <div class="card-body">
            <a href="{{ url('admin/user_list') }}" class="btn btn-secondary">ユーザー一覧</a>
        </div>
        <form method="post" action="{{ url('admin/logout') }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-outline-secondary" value="log out" />
        </form>
    </div>
</div>
@endsection