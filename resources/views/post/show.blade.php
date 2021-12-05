@extends('layouts.app')
@section('content')

    <h1>詳細表示</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/post/index" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

    <!-- table -->
    <table class="table table-striped">
        <tr><td>ID</td><td>{{$post->id}}</tr>
        <tr><td>タイトル</td><td>{{$post->title}}</tr>
        <tr><td>本文</td><td>{{$post->body}}</tr>
    </table>

@stop