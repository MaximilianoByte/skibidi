<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $alumnos;
    public $val;
    function __construct() {
        $this->alumnos = alumno::paginate(5);
    }
    public function index()
    {
        return view("alumnos/index", ["alumnos" => $this->alumnos]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumno = new alumno;
        $pars = [
            "alumnos" => $this->alumnos,
            "alumno" => $alumno, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("alumnos/frm", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        alumno::create($request->all());
        return redirect()->route("alumnos.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(alumno $alumno)
    {
        return view("alumnos/frm", [
            'alumnos' => $this->alumnos,
            "alumno" => $alumno,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumno $alumno)
    {
        return view("alumnos/frm", [
            "alumnos" => $this->alumnos,
            "alumno" => $alumno,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alumno $alumno)
    {
        $alumno->update($request->all());
        return redirect()->route("alumnos.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
