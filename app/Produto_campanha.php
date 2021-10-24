<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto_campanha extends Model
{
    protected $table = 'produtos_campanhas';
    protected $primaryKey = 'idprodutos_campanhas';
    public $timestamps = false;
    protected $fillable = array('idproduto', 'idcampanha');
}
