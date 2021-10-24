<?php

namespace App\Http\Controllers;

use App\Grupo_cidade;
use App\Http\Requests\GrupoCidadeResquest as Request;

class GrupoCidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Grupo_cidade::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Grupo_cidade::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grupo_cidade  $grupo_cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo_cidade $grupo_cidade)
    {
        return $grupo_cidade;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupo_cidade  $grupo_cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo_cidade $grupo_cidade)
    {
        if ($grupo_cidade->update($request->all())) {
            return 'Grupo de cidades ' . $grupo_cidade->descricao . ' atualizada com sucesso!';
        } else {
            return 'Erro ao realizar atualização da grupo de cidades ' . $grupo_cidade->descricao . '.';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupo_cidade  $grupo_cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo_cidade $grupo_cidade)
    {
        if ($grupo_cidade->delete()) {
            return 'Grupo de cidades ' . $grupo_cidade->descricao . ' excluída com sucesso!';
        } else {
            return 'Erro ao realizar exclusão da grupo de cidades ' . $grupo_cidade->descricao . '.';
        }
    }
}
