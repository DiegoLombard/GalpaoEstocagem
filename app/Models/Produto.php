<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    
    protected $fillable = ['descricao','preco', 'cor', 'peso', 'marca_id'];

    public function marca(){
        return $this->belongsTo('App\Models\Marca','marca_id');
    }
    use HasFactory;
}
