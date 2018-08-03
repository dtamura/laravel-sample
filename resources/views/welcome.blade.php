@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>トップ画面</h1>
            @guest
            <p>ログインしていません</p>
            @else
            <p>ログイン済みです</p>
            @endguest
        </div>
    </div>
</div>
@endsection
