<?php

namespace App\Http\Controllers;

use App\Models\Contador;
use Illuminate\Http\Request;

class ContadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

public function contador()
    {
        return Contador::all();
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
     * @param  \App\Models\Contador  $contador
     * @return \Illuminate\Http\Response
     */
    public function show(Contador $contador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contador  $contador
     * @return \Illuminate\Http\Response
     */
    public function edit(Contador $contador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contador  $contador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contador $contador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contador  $contador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contador $contador)
    {
        //
    }
}
