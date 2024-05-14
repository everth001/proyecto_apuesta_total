<?php

namespace App\Http\Controllers;

use App\Models\TipoMoneda;
use App\Http\Requests\StoreTipoMonedaRequest;
use App\Http\Requests\UpdateTipoMonedaRequest;

class TipoMonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTpoMonedaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoMonedaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TpoMoneda  $tpoMoneda
     * @return \Illuminate\Http\Response
     */
    public function show(TipoMoneda $tpoMoneda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TpoMoneda  $tpoMoneda
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoMoneda $tpoMoneda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTpoMonedaRequest  $request
     * @param  \App\Models\TpoMoneda  $tpoMoneda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoMonedaRequest $request, TipoMoneda $tpoMoneda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TpoMoneda  $tpoMoneda
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoMoneda $tpoMoneda)
    {
        //
    }
}
