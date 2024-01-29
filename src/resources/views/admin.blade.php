@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
{{-- <script type="text/javascript" src="{{ asset('js/test.js') }}"></script> --}}
@endsection

@section('content')
<article class="admin-main">
    
    <section class="admin-header">
        Admin
    </section>
    
    <section class="admin-search-menu">
        <form action="/admin" method="POST">
            <div class="admin-search-menu-main">
                <input type="text" name="keyword">
                <select name="gender">
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
                <select name="category_id">
                    <option value="1">商品のお届けについて</option>
                    <option value="2">商品の交換について</option>
                    <option value="3">商品トラブル</option>
                    <option value="4">ショップへのお問い合わせ</option>
                    <option value="5">その他</option>
                </select>
                <input type="date">
                <input type="submit" value="検索">
                {{-- TODO リセット機能 --}}
                <button>リセット</button>
            </div>
        </form>
        <div class="admin-search-menu-sub">
            {{-- TODO CSV化機能 --}}
            <form>
                <button>エクスポート</button>
            </form>
            {{-- TODO ページネーション --}}
            ページネーションリンク
        </div>
    </section>
    <section class="admin-result">
        <table class="admin-result-body">
            <tr class="admin-result-body__head">
                <th class="admin-result-body__head-elm">お名前</th>
                <th class="admin-result-body__head-elm">性別</th>
                <th class="admin-result-body__head-elm">メールアドレス</th>
                <th class="admin-result-body__head-elm" colspan="2">お問い合わせ種類</th>
            </tr>
            @foreach($results as $result)
                <tr id="admin-result-body__data1" data-tr="{{ $result->id }}">
                    <td>{{$result->first_name}} {{$result->last_name}}</td>
                    <td>{{$result->gender === 1 ? '男性' : ($result->gender === 2 ? '女性' : 'その他')}}</td>
                    <td>{{$result->email}}</td>
                    <td>{{$result->category === 1 ? '商品のお届けについて' : ($result->category === 2 ? '商品の交換について' : ($result->category === 3 ? '商品トラブル' : ($result->category === 4 ? 'ショップへのお問い合わせ' : 'その他')))}}</td>
                    <td><button onClick="openModal({{$result->id}})">詳細</button></td>
                </tr>
            @endforeach
            {{-- <tr id="admin-result-body__data2" data-tr="2">    
                <td>うう ええ</td><td>女性</td><td>bbb@bbbbbb</td><td>商品の交換について</td><td><button onClick="openModal(2)">詳細</button></td>
            </tr>
            <tr id="admin-result-body__data1" data-tr="3">
                <td>おお かか</td><td>男性</td><td>ccc@cccccc</td><td>商品の交換について</td><td><button onClick="openModal(3)">詳細</button></td>
            </tr> --}}
        </table>
    </section>

    <section class="modal-frame">
    {{-- モーダルウィンドウ --}}
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="modal-close" onclick="closeModal()">&times;</span>
                <div id="modal-content">
                    <table class="modal-content__table">
                        <tr id="modal-content__table-id">
                            <th>テスト</th>
                            <td></td>
                        </tr>
                        <tr class="modal-content__table-name">
                            <th>お名前</th>
                            <td>あああ</td>
                        </tr>
                        <tr class="modal-content__table-gender">
                            <th>性別</th>
                            <td>男性</td>
                        </tr>
                        <tr class="modal-content__table-email">
                            <th>メールアドレス</th>
                            <td>aaa@aaa.com</td>
                        </tr>
                        <tr class="modal-content__table-address">
                            <th>住所</th>
                            <td>いいい</td>
                        </tr>
                        <tr class="modal-content__table-building">
                            <th>建物名</th>
                            <td>ええええええええええええええええええええええ</td>
                        </tr>
                        <tr class="modal-content__table-category">
                            <th>お問い合わせの種類</th>
                            <td>ああああああああ</td>
                        </tr>
                        <tr class="modal-content__table-detail">
                            <th>お問い合わせ内容</th>
                            <td>
                                あいうえおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお
                            </td>
                        </tr>
                        <tr class="modal-content__table-button">
                            <td colspan="2">
                                <form action="">
                                    <input type="submit" value="削除">
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</article>

<script type="text/javascript" src="{{ asset('js/test.js') }}"></script>

@endsection