<?php

namespace App\Http\Controllers;

use App\Models\hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    public $horas;
    public $val;
    function __construct() {
        $this->horas = hora::paginate(5);
    }
    public function index()
    {
        return view("horas/index", ["horas" => $this->horas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hora = new hora;
        $pars = [
            "horas" => $this->horas,
            "hora" => $hora, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("horas/frm", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        hora::create($request->all());
        return redirect()->route("horas.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(hora $hora)
    {
        return view("horas/frm", [
            'horas' => $this->horas,
            "hora" => $hora,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hora $hora)
    {
        return view("horas/frm", [
            "horas" => $this->horas,
            "hora" => $hora,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hora $hora)
    {
        $hora->update($request->all());
        return redirect()->route("horas.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hora $hora)
    {
        $hora->delete();
        return redirect()->route('horas.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
