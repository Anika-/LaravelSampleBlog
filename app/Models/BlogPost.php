<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //
     protected $table = 'publicacoes';


     protected $fillable = ['titulo','autor_id','conteudo','data_publicacao','imagem'];

     public function user()
    {
        return $this->belongsTo('App\Models\Usuario');
    }
}
