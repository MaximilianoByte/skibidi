<?php

namespace App\Http\Controllers;

use App\Models\plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    public $plazas;
    public $val;
    function __construct() {
        $this->plazas = plaza::paginate(5);
    }
    public function index()
    {
        return view("plazas/index", ["plazas" => $this->plazas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plaza = new plaza;
        $pars = [
            "plazas" => $this->plazas,
            "plaza" => $plaza, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("plazas/frm", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        plaza::create($request->all());
        return redirect()->route("plazas.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(plaza $plaza)
    {
        return view("plazas/frm", [
            'plazas' => $this->plazas,
            "plaza" => $plaza,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plaza $plaza)
    {
        return view("plazas/frm", [
            "plazas" => $this->plazas,
            "plaza" => $plaza,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, plaza $plaza)
    {
        $plaza->update($request->all());
        return redirect()->route("plazas.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plaza $plaza)
    {
        $plaza->delete();
        return redirect()->route('plazas.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
