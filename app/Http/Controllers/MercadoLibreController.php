<?php

namespace App\Http\Controllers;

use App\Models\MercadoLibre;
use Illuminate\Http\Request;
// use Models\MercadoLibre;
use Http;

class MercadoLibreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuesta = Http::get('https://mindicador.cl/api');
        $dolar = $respuesta->json();
        return view('welcome', compact('dolar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MercadoLibre  $mercadoLibre
     * @return \Illuminate\Http\Response
     */
    public function show(MercadoLibre $mercadoLibre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MercadoLibre  $mercadoLibre
     * @return \Illuminate\Http\Response
     */
    public function edit(MercadoLibre $mercadoLibre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MercadoLibre  $mercadoLibre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MercadoLibre $mercadoLibre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MercadoLibre  $mercadoLibre
     * @return \Illuminate\Http\Response
     */
    public function destroy(MercadoLibre $mercadoLibre)
    {
        //
    }
}
