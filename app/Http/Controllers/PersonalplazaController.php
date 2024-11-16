<?php

namespace App\Http\Controllers;

use App\Models\personalplaza;
use Illuminate\Http\Request;

class PersonalplazaController extends Controller
{
    public $personalplazas;
    public $val;
    function __construct() {
        $this->personalplazas = personalplaza::paginate(5);
    }
    public function index()
    {
        return view("personalplazas/index", ["personalplazas" => $this->personalplazas]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personalplaza = new personalplaza;
        $pars = [
            "personalplazas" => $this->personalplazas,
            "personalplaza" => $personalplaza, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("personalplazas/frm", $pars);
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        personalplaza::create($request->all());
        return redirect()->route("personalplazas.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(personalplaza $personalplaza)
    {
        return view("personalplazas/frm", [
            'personalplazas' => $this->personalplazas,
            "personalplaza" => $personalplaza,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personalplaza $personalplaza)
    {
        return view("personalplazas/frm", [
            "personalplazas" => $this->personalplazas,
            "personalplaza" => $personalplaza,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personalplaza $personalplaza)
    {
        $personalplaza->update($request->all());
        return redirect()->route("personalplazas.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personalplaza $personalplaza)
    {
        $personalplaza->delete();
        return redirect()->route('personalplazas.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
