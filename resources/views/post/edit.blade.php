@extends('layouts.app')

@section('content')

    <h1>投稿編集</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/post/index" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

    <!-- form -->
    <form method="post" action="/post/update">

        <div class="form-group">
            <label>タイトル</label>
            <input type="string" name="title" value="{{ $post->title}}" class="form-control">
        </div>

        <div class="form-group">
            <label>本文</label>
            <input type="text" name="body" value="{{ $post->body}}" class="form-control">
        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" value="更新" class="btn btn-primary">

    </form>

@stop