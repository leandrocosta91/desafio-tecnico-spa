<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $primaryKey = 'idcidade';
    public $timestamps = false;
    protected $fillable = array('descricao', 'idgrupo_cidade');
}
