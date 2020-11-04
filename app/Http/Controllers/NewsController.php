<?php


namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    public function form(){
        return view ('newsForm');
    }

    public function store(request $request){
            
            
            $news = new News();
            $news->admin_id = Auth::user()->id;
            $news->author = auth()->user()->name;
            $news->title = $request->title;
            $news->subtitle = $request->subtitle;
            $news->date = $request->date;
            $news->text = $request->text;

            //salvando a imagem
            $news->img = Storage::disk('public')->putFile('posts_images', $request->file('image'));
            $news->save();
           

    }
}
