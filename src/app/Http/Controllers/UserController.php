<?php
namespace App\Http\Controllers;
use App\User;
class UserController extends Controller
{
  public function index()
  {
    // $la='chocolate';
    $email=substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0,8) . '@yyyy.com';
    User::insert(['name' =>'yamada taro', 'email' => $email, 'password' => 'xxxxxxxx']);
    $users=User::all(); //Modelにデータの処理を行わせる

    return view('user',['users'=> $users]); //userビュー「user.blade.php」を呼び出し、「データ」nameを渡す

  }
}
?>
