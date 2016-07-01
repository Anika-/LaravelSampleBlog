<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //tabela associada ao modelo
     protected $table = 'usuarios';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','email','senha','data_nasc','foto'];

     /*
     *    recuperar artigos do usuario
     */
     public function artigos()
    {   //usuario tem varios artigos
        return $this->hasMany('App\Models\BlogPost');
    }
}
