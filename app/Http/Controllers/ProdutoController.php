<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Http\Requests\ProdutoResquest as Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produto::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Produto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return $produto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        if ($produto->update($request->all())) {
            return 'Produto ' . $produto->descricao . ' atualizado com sucesso!';
        } else {
            return 'Erro ao realizar atualização do produto ' . $produto->descricao . '.';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        if ($produto->delete()) {
            return 'Produto ' . $produto->descricao . ' excluído com sucesso!';
        } else {
            return 'Erro ao realizar exclusão do produto ' . $produto->descricao . '.';
        }
    }
}
