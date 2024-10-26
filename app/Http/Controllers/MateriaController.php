<?php

namespace App\Http\Controllers;

use App\Models\materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public $materias;
    public $val;
    function __construct() {
        $this->materias = materia::paginate(5);
    }
    public function index()
    {
        return view("materias/index", ["materias" => $this->materias]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materia = new materia;
        $pars = [
            "materias" => $this->materias,
            "materia" => $materia, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("materias/frm", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        materia::create($request->all());
        return redirect()->route("materias.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(materia $materia)
    {
        return view("materias/frm", [
            'materias' => $this->materias,
            "materia" => $materia,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(materia $materia)
    {
        return view("materias/frm", [
            "materias" => $this->materias,
            "materia" => $materia,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, materia $materia)
    {
        $materia->update($request->all());
        return redirect()->route("materias.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
