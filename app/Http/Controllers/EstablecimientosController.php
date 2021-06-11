<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Establecimientos;
use Illuminate\Http\Request;

class EstablecimientosController extends Controller
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
        $categorias = Categoria::all();
        return view('establecimientos.create', compact('categorias'));
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
     * @param  \App\Establecimientos  $establecimientos
     * @return \Illuminate\Http\Response
     */
    public function show(Establecimientos $establecimientos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Establecimientos  $establecimientos
     * @return \Illuminate\Http\Response
     */
    public function edit(Establecimientos $establecimientos)
    {
        //
        return ' desde edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Establecimientos  $establecimientos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Establecimientos $establecimientos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Establecimientos  $establecimientos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establecimientos $establecimientos)
    {
        //
    }
}
