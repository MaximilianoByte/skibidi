<?php

namespace App\Http\Controllers;

use App\Models\lugares;
use Illuminate\Http\Request;

class LugaresController extends Controller
{
    public $lugars;
    public $val;
    function __construct() {
        $this->lugars = lugares::paginate(5);
    }
    public function index()
    {
        return view("lugares/index", ["lugars" => $this->lugars]);
   
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $lugar = new lugares();
        $pars = [
            "lugars" => $this->lugars,
            "lugar" => $lugar, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("lugares/frm", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        lugares::create($request->all());
        return redirect()->route("lugares.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(lugares $lugares)
    {
        return view("lugares/frm", [
            'lugares' => $this->lugars,
            "lugar" => $lugares,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lugares $lugares)
    {
        return view("lugares/frm", [
            "lugares" => $this->lugars,
            "lugar" => $lugares,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lugares $lugares)
    {
        $lugares->update($request->all());
        return redirect()->route("lugaress.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lugares $lugares)
    {
        $lugares->delete();
        return redirect()->route('lugares.index')->with('mensaje', 'El registro se Elimino correctamente');
    }
}
