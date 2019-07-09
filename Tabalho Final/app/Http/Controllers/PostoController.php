<?php

namespace App\Http\Controllers;

use App\Posto;
use Illuminate\Http\Request;

class PostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postos = Posto::all();
        $mPreco = New Posto();
        $maxProx = New Posto();
        return view('postos.index')
              ->with('postos', $postos)
              ->with('mPreco', $mPreco)
              ->with('maxProx', $maxProx);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Posto::create($request->all());

        redirect()->route('postos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function show(Posto $posto)
    {
        return view('postos.show')->with('posto',$posto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function edit(Posto $posto)
    {
        return view('postos.edit')->with('posto',$posto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posto $posto)
    {
        $posto->fill($request->all());

        return redirect()->route('postos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posto $posto)
    {
        $posto->delete();

        return redirect()->route('postos.index');
    }
}
