<?php

namespace App\Http\Controllers;

use App\Produto_campanha;
use App\Http\Requests\ProdutoCampanhaResquest as Request;

class ProdutoCampanhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produto_campanha::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Produto_campanha::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto_campanha  $produto_campanha
     * @return \Illuminate\Http\Response
     */
    public function show(Produto_campanha $produto_campanha)
    {
        return $produto_campanha;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto_campanha  $produto_campanha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto_campanha $produto_campanha)
    {
        if ($produto_campanha->update($request->all())) {
            return 'Produto da campanha ' . $produto_campanha->descricao . ' atualizada com sucesso!';
        } else {
            return 'Erro ao realizar atualização da produto da campanha ' . $produto_campanha->descricao . '.';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto_campanha  $produto_campanha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto_campanha $produto_campanha)
    {
        if ($produto_campanha->delete()) {
            return 'Produto da campanha ' . $produto_campanha->descricao . ' excluída com sucesso!';
        } else {
            return 'Erro ao realizar exclusão da produto da campanha ' . $produto_campanha->descricao . '.';
        }
    }
}
