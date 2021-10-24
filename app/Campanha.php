<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $primaryKey = 'idcampanha';
    public $timestamps = false;
    protected $fillable = array('descricao', 'desconto');
}
