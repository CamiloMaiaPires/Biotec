<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome(){

        $news = News::orderBy('created_at', 'desc')->limit(3)->get();
        return view('welcome', [
            'news'=>$news
        ]);        
    }
}
