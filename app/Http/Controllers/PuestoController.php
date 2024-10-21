<?php

namespace App\Http\Controllers;

use App\Models\puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    public $puestos;
    public $val;
    function __construct() {
        $this->puestos = puesto::paginate(5);
    }
    public function index()
    {
        return view("puestos/index", ["puestos" => $this->puestos]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $puesto = new puesto;
        $pars = [
            "puestos" => $this->puestos,
            "puesto" => $puesto, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("puestos/frm", $pars);
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        puesto::create($request->all());
        return redirect()->route("puestos.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(puesto $puesto)
    {
        return view("puestos/frm", [
            'puestos' => $this->puestos,
            "puesto" => $puesto,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(puesto $puesto)
    {
        return view("puestos/frm", [
            "puestos" => $this->puestos,
            "puesto" => $puesto,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, puesto $puesto)
    {
        $puesto->update($request->all());
        return redirect()->route("puestos.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(puesto $puesto)
    {
        $puesto->delete();
        return redirect()->route('puestos.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
