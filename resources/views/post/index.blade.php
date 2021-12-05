@extends('layouts.app')

@section('content')
   <h1>一覧表示</h1>
  <!-- 新規投稿 -->
   <div class="row">
        <div class="col-sm-12">
            <a href="/post/create" class="btn btn-primary" style="margin:20px;">新規投稿</a>
        </div>
    </div>
  <!-- table -->
    <table class="table table-striped">

  <!-- loop -->
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td><a href="/post/show/{{$post->id}}" class="btn btn-primary btn-sm">詳細</a></td>
            <td><a href="/post/edit/{{$post->id}}" class="btn btn-primary btn-sm">編集</a></td>
            <td>
                <form method="post" action="/post/destroy/{{$post->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" value="削除" class="btn btn-danger btn-sm btn-destroy">
                </form>
            </td>
        </tr>
    @endforeach
    </table>

    <!-- page control -->
    {!! $posts->render() !!}
@endsection