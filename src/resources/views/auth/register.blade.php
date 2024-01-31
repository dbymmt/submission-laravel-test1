@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection


@section('content')
<article class="register-main">
    <h2 class="register-title">Register</h2>
    <div class="register-body">
        <form action="/register" method="POST">
        @csrf
            <label for="register-body_your-name" class="register-body_your-name-label" >お名前</label>
            <input type="text" id="register-body__your-name" name="name" value="{{old('name')}}">
            <label for="register-body__your-mail" class="register-body__your-mail-label">メールアドレス</label>
            <input type="text" id="register-body__your-mail" name="email" value="{{old('email')}}">
            <label for="register-body__your-password" class="register-body__your-password-label">パスワード</label>
            <input type="text" id="register-body__your-password" name="password" value="{{old('password')}}">
            <input type="submit" value="登録">
        </form>
    </div>
</article>
@endsection