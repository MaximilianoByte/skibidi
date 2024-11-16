<?php

namespace App\Http\Controllers;

use App\Models\depto;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    public $deptos;
    public $val;
    function __construct() {
        $this->deptos = depto::paginate(5);
    }

    //INDEX PARA PONER ORDENAMIENTO
    public function index(Request $request)
    {
        $sortField = $request->get('sort', 'id'); // Campo por el cual ordenar, por defecto 'id'
        $sortDirection = $request->get('direction', 'asc'); // Dirección de ordenación, por defecto 'asc'
        
        $this->deptos = depto::orderBy($sortField, $sortDirection)->paginate(5);
        
        return view("deptos/index", [
            "deptos" => $this->deptos,
            "sortField" => $sortField,
            "sortDirection" => $sortDirection
        ]);
    }
    
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $depto = new depto;
        $pars = [
            "deptos" => $this->deptos,
            "depto" => $depto, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("deptos/frm", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        depto::create($request->all());
        return redirect()->route("deptos.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(depto $depto)
    {
        return view("deptos/frm", [
            'deptos' => $this->deptos,
            "depto" => $depto,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(depto $depto)
    {
        return view("deptos/frm", [
            "deptos" => $this->deptos,
            "depto" => $depto,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, depto $depto)
    {
        $depto->update($request->all());
        return redirect()->route("deptos.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(depto $depto)
    {
        $depto->delete();
        return redirect()->route('deptos.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
