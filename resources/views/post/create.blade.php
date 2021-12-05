@extends('layouts.app')

@section('content')

    <h1>新規投稿</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/post/index" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

    <!-- form -->
    <form method="post" action="/post/store">

        <div class="form-group">
            <label>タイトル</label>
            <input type="string" name="title" value="" class="form-control">
        </div>

        <div class="form-group">
            <label>本文</label>
            <input type="text" name="body" value="" class="form-control">
        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" value="投稿" class="btn btn-primary">

    </form>

@stop