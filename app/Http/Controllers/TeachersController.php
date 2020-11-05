<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeachersController extends Controller
{
    public function form(){
        return view ('teachersForm');
    }

    public function store(request $request){
            
        $teachers = new Teachers();
        $teachers->name = $request->name;
        $teachers->lab = $request->lab;
        $teachers->lablink = $request->lablink;
        $teachers->lattes = $request->lattes;
        $teachers->text = $request->text;
        $teachers->save();
    }
}
