<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;

class Datos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Inicio de crud';
        $items = Dato::all();
        return view('index', compact('titulo','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar Equipo';
        return view('create' , compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Dato();
        $item->nombre = $request->nombre;
        $item->marca= $request->marca;
        $item->modelo= $request->modelo;
        $item->ram= $request->ram;
        $item->procesador= $request->procesador;
        $item->discoDuro= $request->discoDuro;
        $item->descripcion= $request->descripcion;
        $item->url= $request->url;
        $item->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar ";
        $items = Dato::find($id);
        return view("eliminar", compact('items','titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Actualizar';
        $items = Dato::find($id);
        return view('edit', compact('items', 'titulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Dato::find($id);
        $item->nombre = $request->nombre;
        $item->marca= $request->marca;
        $item->modelo= $request->modelo;
        $item->ram= $request->ram;
        $item->procesador= $request->procesador;
        $item->discoDuro= $request->discoDuro;
        $item->descripcion= $request->descripcion;
        $item->url= $request->url;
        $item->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Dato::find($id);
        $item->delete();
        return redirect('/');
    }
}
