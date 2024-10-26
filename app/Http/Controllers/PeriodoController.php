<?php

namespace App\Http\Controllers;

use App\Models\periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
   
    public $periodos;
    public $val;
    function __construct() {
        $this->periodos = periodo::paginate(5);
    }
    public function index()
    {
        return view("periodos/index", ["periodos" => $this->periodos]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periodo = new periodo;
        $pars = [
            "periodos" => $this->periodos,
            "periodo" => $periodo, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("periodos/frm", $pars);
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        periodo::create($request->all());
        return redirect()->route("periodos.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(periodo $periodo)
    {
        return view("periodos/frm", [
            'periodos' => $this->periodos,
            "periodo" => $periodo,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(periodo $periodo)
    {
        return view("periodos/frm", [
            "periodos" => $this->periodos,
            "periodo" => $periodo,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, periodo $periodo)
    {
        $periodo->update($request->all());
        return redirect()->route("periodos.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('periodos.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
