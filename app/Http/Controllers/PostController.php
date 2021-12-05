<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Post::query();

        //全件取得
        $posts = $query->get();

        //ページネーション
        $posts = $query->orderBy('id','desc')->paginate(10);

        //post/index.blade.phpに$postsという変数を渡す場合
        return view('post.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //createに転送
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //postオブジェクト生成
        $post = Post::create();

        //値の登録。
        //右側はviewのnameから持ってきたもの
        //左側はモデルのカラム名
        $post->title = $request->title;
        $post->body = $request->body;

        //保存
        $post->save();

        //一覧にリダイレクト
        return redirect()->to('/post/index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //postテーブルからレコードを検索
        $post = Post::find($id);
        //検索結果をビューに渡す
        return view('post.show')->with('post',$post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
                //idを受け取る
    public function edit($id)
    {
        //受け取ったidを元にpostテーブルからレコードを検索
        $post = Post::find($id);
        //検索結果をビューに渡す
        return view('post.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
                                //idを受け取る
    public function update(Request $request, $id)
    {
        //受け取ったidを元にpostテーブルからレコードを検索
        $post = Post::find($id);
        //値を代入
        $post->title = $request->title;
        $post->body = $request->body;
        //保存（更新）
        $post->save();
        //リダイレクト
        return redirect()->to('/post/index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
                //idを受け取る
    public function destroy($id)
    {
        ////受け取ったidを元に削除対象レコードを検索
        $post = Post::find($id);
        //削除
        $post->delete();
        //リダイレクト
        return redirect()->to('/post/index');
    }
}
