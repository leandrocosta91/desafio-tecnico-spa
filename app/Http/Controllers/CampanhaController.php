<?php

namespace App\Http\Controllers;

use App\Campanha;
use App\Http\Requests\CampanhaResquest as Request;

class CampanhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Campanha::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Campanha::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function show(Campanha $campanha)
    {
        return $campanha;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campanha $campanha)
    {
        if ($campanha->update($request->all())) {
            return 'Campanha ' . $campanha->descricao . ' atualizada com sucesso!';
        } else {
            return 'Erro ao realizar atualização da campanha ' . $campanha->descricao . '.';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campanha $campanha)
    {
        if ($campanha->delete()) {
            return 'Campanha ' . $campanha->descricao . ' excluída com sucesso!';
        } else {
            return 'Erro ao realizar exclusão da campanha ' . $campanha->descricao . '.';
        }
    }
}
