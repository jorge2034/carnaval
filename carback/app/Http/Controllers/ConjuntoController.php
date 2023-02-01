<?php

namespace App\Http\Controllers;

use App\Models\Conjunto;
use App\Http\Requests\StoreConjuntoRequest;
use App\Http\Requests\UpdateConjuntoRequest;

class ConjuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Conjunto::all();
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
     * @param  \App\Http\Requests\StoreConjuntoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConjuntoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conjunto  $conjunto
     * @return \Illuminate\Http\Response
     */
    public function show(Conjunto $conjunto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conjunto  $conjunto
     * @return \Illuminate\Http\Response
     */
    public function edit(Conjunto $conjunto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConjuntoRequest  $request
     * @param  \App\Models\Conjunto  $conjunto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConjuntoRequest $request, Conjunto $conjunto)
    {
//        $conjunto->update($request->all());
        $conjunto->lat=$request->lat;
        $conjunto->lng=$request->lng;
        $conjunto->save();
        return $conjunto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conjunto  $conjunto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conjunto $conjunto)
    {
        //
    }
}
