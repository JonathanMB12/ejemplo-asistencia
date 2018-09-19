<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportePdf()
    {
      //sql query
      //use pdf lib
      //return pdf_file
    }
    public function index()
    {
        //
      return view ('materias.indexMaterias');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      return view ('materias.formMateria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $materia = $request->materia;
        //
      //validacion
      //$materia = $_POST['materia'];
      //inserta base de datos
      //redirecionar
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($materia = null)
    {
        //
      //dd($id);
      //buscar materia con id
      return view('materias.showMateria', compact('materia'));
      //  ->with(['nombreVariableVista' => 'valor', 'nombre' => "Prog. Internet"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view ('materias.formEditMateria', compact('id'));
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
        //
      //validacion
      //$materia = $_POST['materia'];
      //actualiza base de datos
      //redirecionar /materia/show/id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
