<?php

namespace App\Http\Controllers;

use App\Estagiario;
use Illuminate\Http\Request;

class EstagiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_estagiario= Estagiario::all();
        return view('estagiarios.index',compact('a_estagiario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estagiarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estagiario::create($request->all());
        return redirect()->route('estagiarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function show(Estagiario $estagiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function edit(Estagiario $estagiario)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estagiario $estagiario)
    {
        $estagiario->update($request->all());
        return redirect()->route('estagiarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estagiario $estagiario)
    {
        //
    }
}
