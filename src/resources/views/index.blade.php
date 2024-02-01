@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<article class="index-main">
    <h2 class="index-title">Contact</h2>
    <form action="/admin/create" method="POST">
    @csrf
        <label for="index-body_your-first-name" class="index-body_your-first-name-label" >お名前</label>
        <input type="text" id="index-body_your-first-name" name="first_name" value="{{old('first_name')}}">
        {{-- <label for="index-body_your-last-name" class="index-body_your-last-name-label" >お名前</label> --}}
        <input type="text" id="index-body_your-last-name" name="last_name" value="{{old('last_name')}}">

        <label for="index-body_your-gender" class="index-body_your-gender-label" >性別</label>
        <label for="index-body_your-gender-man" class="index-body_your-gender-label" >男性</label>
        <input type="radio" id="index-body_your-gender-men" name="gender" value="{{old('gender')}}">
        <label for="index-body_your-gender-woman" class="index-body_your-gender-label" >女性</label>
        <input type="radio" id="index-body_your-gender-women" name="gender" value="{{old('gender')}}">
        <label for="index-body_your-gender-other" class="index-body_your-gender-label" >その他</label>
        <input type="radio" id="index-body_your-gender-other" name="gender" value="{{old('gender')}}">

        <label for="index-body_your-first-email" class="index-body_your-email-label" >メールアドレス</label>
        <input type="text" id="index-body_your-email" name="email" value="{{old('email')}}">
        
        <label for="index-body_your-tel" class="index-body_your-tel-label" >電話番号</label>
        <label for="index-body_your-tel-first" class="index-body_your-tel-label" ></label>
        <input type="text" id="index-body_your-tel-first" name="tel1" value="{{old('tel1')}}">
        <label for="index-body_your-tel-second" class="index-body_your-tel-label" ></label>
        <input type="text" id="index-body_your-tel-second" name="tel2" value="{{old('tel2')}}">
        <label for="index-body_your-tel-third" class="index-body_your-tel-label" ></label>
        <input type="text" id="index-body_your-tel-third" name="tel3" value="{{old('tel3')}}">

        <label for="index-body_your-address" class="index-body_your-address" >住所</label>
        <input type="text" id="index-body_your-address" name="address" value="{{old('address')}}">

        <label for="index-body_your-building" class="index-body_your-building" >建物名</label>
        <input type="text" id="index-body_your-building" name="building" value="{{old('building')}}">

        <label for="index-body_your-category" class="index-body_your-category" >お問い合わせの種類</label>
        <select name="category_id">
            <option value="">選択してください</option>
            <option value="1">商品のお届けについて</option>
            <option value="2">商品の交換について</option>
            <option value="3">商品トラブル</option>
            <option value="4">ショップへのお問い合わせ</option>
            <option value="5">その他</option>
        </select>

        <label for="index-body_your-detail" class="index-body_your-detail" >お問い合わせの内容</label>
        <textarea name="detail" id="index-body_your-detail" cols="30" rows="10"></textarea>

        <input type="button" value="確認画面">
    </form>
</article>
@endsection