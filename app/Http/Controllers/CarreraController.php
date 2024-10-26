<?php

namespace App\Http\Controllers;

use App\Models\carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public $carreras;
    public $val;
    function __construct() {
        $this->carreras = carrera::paginate(5);
    }
    public function index()
    {
        return view("carreras/index", ["carreras" => $this->carreras]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carrera = new carrera;
        $pars = [
            "carreras" => $this->carreras,
            "carrera" => $carrera, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("carreras/frm", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        carrera::create($request->all());
        return redirect()->route("carreras.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(carrera $carrera)
    {
        return view("carreras/frm", [
            'carreras' => $this->carreras,
            "carrera" => $carrera,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(carrera $carrera)
    {
        return view("carreras/frm", [
            "carreras" => $this->carreras,
            "carrera" => $carrera,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, carrera $carrera)
    {
        $carrera->update($request->all());
        return redirect()->route("carreras.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route('carreras.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
