<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class HomeController extends Controller
{
    
    public function home() {

        return view('pages.home');
    }

    public function actionComics() {

        return view('pages.action-comics');
    }
}
