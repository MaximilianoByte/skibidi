<?php

namespace App\Http\Controllers;

use App\Models\reticula;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    public $reticulas;
    public $val;
    function __construct() {
        $this->reticulas = reticula::paginate(5);
    }
    public function index()
    {
        return view("reticulas/index", ["reticulas" => $this->reticulas]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reticula = new reticula;
        $pars = [
            "reticulas" => $this->reticulas,
            "reticula" => $reticula, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("reticulas/frm", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        reticula::create($request->all());
        return redirect()->route("reticulas.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(reticula $reticula)
    {
        return view("reticulas/frm", [
            'reticulas' => $this->reticulas,
            "reticula" => $reticula,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reticula $reticula)
    {
        return view("reticulas/frm", [
            "reticulas" => $this->reticulas,
            "reticula" => $reticula,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reticula $reticula)
    {
        $reticula->update($request->all());
        return redirect()->route("reticulas.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reticula $reticula)
    {
        $reticula->delete();
        return redirect()->route('reticulas.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
