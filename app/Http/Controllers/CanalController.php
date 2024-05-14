<?php

namespace App\Http\Controllers;

use App\Models\Canal;
use App\Http\Requests\StoreCanalRequest;
use App\Http\Requests\UpdateCanalRequest;

class CanalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canal = Canal::all();
        return response()->json($canal);
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
     * @param  \App\Http\Requests\StoreCanalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCanalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function show(Canal $canal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function edit(Canal $canal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCanalRequest  $request
     * @param  \App\Models\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCanalRequest $request, Canal $canal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canal $canal)
    {
        //
    }
}
