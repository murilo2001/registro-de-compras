<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /* A dfinição da variavel guarded vazia informa ao laravel que tudo que for enviado via POST ou PUT
    pode ser atualizado = não tem nenhuma restrição , poderia também ser colocado um campo 
    especifico */
    protected $guarded = [];

    /* Function para criação de relação entre categoria e produto */
    public function produtos(){
        /* hasMany =  uma categoria pode ter muitos produtos  */
        return $this->hasMany('App\Models\Produto');
    }
}
