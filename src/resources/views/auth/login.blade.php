@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection


@section('content')
<article class="login-main">
    <h2 class="login-title">Login</h2>
    <div class="login-body">
        <form action="/login" method="POST">
        @csrf
            <label for="login-body__your-mail" class="login-body__your-mail-label">メールアドレス</label>
            <input type="text" id="login-body__your-mail" name="email" value="{{old('email')}}">
            <label for="login-body__your-password" class="login-body__your-password-label">パスワード</label>
            <input type="password" id="login-body__your-password" name="password" value="{{old('password')}}">
            <input type="submit" value="Login">
        </form>
    </div>
</article>
@endsection