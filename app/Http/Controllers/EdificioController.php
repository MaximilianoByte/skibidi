<?php

namespace App\Http\Controllers;

use App\Models\edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    public $edificios;
    public $val;
    function __construct() {
        $this->edificios = edificio::paginate(5);
    }
    public function index()
    {
        return view("edificios/index", ["edificios" => $this->edificios]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edificio = new edificio;
        $pars = [
            "edificios" => $this->edificios,
            "edificio" => $edificio, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("edificios/frm", $pars);
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        edificio::create($request->all());
        return redirect()->route("edificios.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(edificio $edificio)
    {
        return view("edificios/frm", [
            'edificios' => $this->edificios,
            "edificio" => $edificio,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(edificio $edificio)
    {
        return view("edificios/frm", [
            "edificios" => $this->edificios,
            "edificio" => $edificio,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, edificio $edificio)
    {
        $edificio->update($request->all());
        return redirect()->route("edificios.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(edificio $edificio)
    {
        $edificio->delete();
        return redirect()->route('edificios.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
