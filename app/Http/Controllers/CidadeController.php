<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Http\Requests\CidadeResquest as Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cidade::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Cidade::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        return $cidade;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        if ($cidade->update($request->all())) {
            return 'Cidade ' . $cidade->descricao . ' atualizada com sucesso!';
        } else {
            return 'Erro ao realizar atualização da cidade ' . $cidade->descricao . '.';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        if ($cidade->delete()) {
            return 'Cidade ' . $cidade->descricao . ' excluída com sucesso!';
        } else {
            return 'Erro ao realizar exclusão da cidade ' . $cidade->descricao . '.';
        }
    }
}
