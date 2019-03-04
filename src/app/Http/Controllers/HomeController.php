<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /*
  Show the application dashbord.

  @ruturn \Illuminate\Http\Response
  */
  public function index()
  {
    return view('home');
  }
  }
    ?>
