<?php

namespace App\Http\Controllers;

use App\Models\personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public $personals;
    public $val;
    function __construct() {
        $this->personals = personal::paginate(5);
    }
    public function index()
    {
        return view("personal/index", ["personals" => $this->personals]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personal = new personal;
        $pars = [
            "personals" => $this->personals,
            "personal" => $personal, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("personal/frm", $pars);
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        personal::create($request->all());
        return redirect()->route("personal.index")->with('mensaje', 'El registro se Inserto correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(personal $personal)
    {
        return view("personal/frm", [
            'personals' => $this->personals,
            "personal" => $personal,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personal $personal)
    {
         return view("personal/frm", [
            "personals" => $this->personals,
            "personal" => $personal,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personal $personal)
    {
        $personal->update($request->all());
        return redirect()->route("personal.index")->with('mensaje', 'El registro se Actualizo correctamente');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personal $personal)
    {
        $personal->delete();
        return redirect()->route('personal.index')->with('mensaje', 'El registro se Elimino correctamente');
   
    }
}
