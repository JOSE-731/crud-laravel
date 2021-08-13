<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class crud extends Controller
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
    public function create(Request $request)
    {
        $request->validate([
            'barrio' => 'required',
            'grupo'  => 'required',
            'numero' => 'required',
            'lider'  => 'required',
            'familia' => 'required'
        ]);

        $Ingresar = new App\ayuda_barrio();

        $Ingresar->nombre_grupo = $request->grupo;
        $Ingresar->lider_grupo = $request->lider;
        $Ingresar->num_ayudas = $request->numero;
        $Ingresar->nombre_barrio = $request->barrio;
        $Ingresar->num_familias = $request->familia;


        $Ingresar->save();

        return back()->with('mensaje', 'GUARDADO CON EXITO');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Mostrar = App\ayuda_barrio::paginate(10);
        return view('inventario',compact('Mostrar'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Mostrar = App\ayuda_barrio::findOrFail($id);
        return view('editar',compact('Mostrar'));
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
        $Ingresar3 = App\ayuda_barrio::findOrFail($id);
        $Ingresar3->nombre_grupo = $request->grupo;
        $Ingresar3->lider_grupo = $request->lider;
        $Ingresar3->num_ayudas = $request->numero;
        $Ingresar3->nombre_barrio = $request->barrio;
        $Ingresar3->num_familias = $request->familia;


        $Ingresar3->save();

        return back()->with('mensaje', 'REGISTRO EDITADO Y GUARDADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Eliminar = App\ayuda_barrio::findOrFail($id);
        $Eliminar->delete();

        return back()->with('mensaje','REGISTRO BORRADO CON EXITO');
    }
}
