<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo_cidade extends Model
{
    protected $primaryKey = 'idgrupo_cidade';
    public $timestamps = false;
    protected $fillable = array('descricao', 'idcampanha');
}
