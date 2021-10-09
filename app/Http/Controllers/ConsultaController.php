<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consulta;

class consultaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-consulta|crear-consulta|editar-consulta|borrar-consulta')->only('index');
         $this->middleware('permission:crear-consulta', ['only' => ['create','store']]);
         $this->middleware('permission:editar-consulta', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-consulta', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
         //Con paginación
         $consultas = Consulta::paginate(5);
         return view('consultas.index',compact('consultas'));
          
    }

    
    public function create()
    {
        return view('consultas.crear');
    }

    
    public function store(Request $request)
    {
        request()->validate([
            'titulo' => 'required',
            'consulta' => 'required',
        ]);
    
        consulta::create($request->all());
    
        return redirect()->route('consultas.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Consulta $consulta)
    {
        return view('consultas.editar',compact('consulta'));
    }

    
    public function update(Request $request, consulta $consulta)
    {
         request()->validate([
            'titulo' => 'required',
            'consulta' => 'required',
        ]);
    
        $consulta->update($request->all());
    
        return redirect()->route('consultas.index');
    }

    
    public function destroy(Consulta $consulta)
    {
        $consulta->delete();
    
        return redirect()->route('consultas.index');
    }
}