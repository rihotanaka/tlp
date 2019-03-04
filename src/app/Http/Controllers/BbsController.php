<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Bbs; //Modelファイル引用

class BbsController extends Controller
{
  public function index(){ //Indexページの表示
    $bbs=Bbs::all(); //全データの取り出し
    return view('bbs.index');
  }

  public function create(Request $request) { //投稿内容を表示するページ
//バリデーションチェック
$request->validate([
  'name'=> 'required|max:10',
  'comment'=> 'required|min:5|max:140',
]);
//投稿内容を受け取り変数に入れる
$name=$request->input('name');
$comment=$request->input('comment');

Bbs::insert(["name"=>$name,"comment"=>$comment]); //データベーステーブルbbsに投稿内容を入れる

$bbs=Bbs::all(); //全データの取り出し
return view('bbs.index',["bbs"=>$bbs]); //bbs.indexにデータを渡す
  }
}
?>
