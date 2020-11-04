<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $table = 'news';

   //metodo que pega o nome do campo "title" e toda vez que setarmos o valor dentro de title o modelo irá ativar esse metodo
   public function setTitleAttribute($value){ 
       
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str::slug($value);
    }
}
