<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class PostController extends Controller
{
    // Indexページの表示
    public function index() {
        $post=post::all();
        return view('post.index',['post'=>$post]);
    }

    public function upload(Request $request){
      $this->validate($request,[
        'image'=>[
          'required', //必須
          'file', //アップロードされたファイルであること
          'image', //画像ファイルであること
          'mimes:jpeg,png', //MIMEタイプを指定
        ]
      ]);

    if ($request->file('image')->isValid([])) {
      $image=base64_encode(file_get_contents($request->image->getRealPath()));
      post::insert([
                  'user_id'=>1,
                  'name'=>$request->name,
                  'comment'=>$request->comment,
                  'image'=>$image
                ]);
      return view('post')->with('image',$image);
     } else {
      return redirect()
      ->back()
      ->withInput()
      ->withErrors();
     }
   }

    public function create(Request $request) {
          $request->validate([
            'name'=>'required|max:10',
            'comment'=>'required|max:200',
          ]);

          // 投稿内容の受け取って変数に入れる
          $name=$request->input('name');
          $comment = $request->input('comment');
          $image = $request->input('image');

          post::insert(['name'=>$name, 'comment'=>$comment, 'image'=>$image]);
          $post=post::all();
          // 変数をビューに渡す
          return view('post.index',['post'=>$post]);
      }
}
?>
