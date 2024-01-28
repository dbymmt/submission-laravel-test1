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
            <tr id="admin-result-body__data1" data-tr="1">
                <td>名前 名前</td><td>男性</td><td>aaa@aaaaaa</td><td>商品の交換について</td><td><button onClick="testClick(1)">詳細</button></td>
            </tr>
            <tr id="admin-result-body__data2" data-tr="2">    
                <td>名前 名前</td><td>男性</td><td>aaa@aaaaaa</td><td>商品の交換について</td><td><button onClick="testClick(2)">詳細</button></td>
            </tr>
            <tr id="admin-result-body__data1" data-tr="3">
                <td>名前 名前</td><td>男性</td><td>aaa@aaaaaa</td><td>商品の交換について</td><td><button onClick="testClick(3)">詳細</button></td>
            </tr>
        </table>
    </section>
</article>

<script type="text/javascript" src="{{ asset('js/test.js') }}"></script>

@endsection