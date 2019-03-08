<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Up;

class UpController extends Controller
{
    // Indexページの表示
    public function index() {
        return view('up.index');
    }


}
