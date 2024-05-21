<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProyecto;
use App\Models\Proyecto;
use App\Models\Cliente;
use Illuminate\Http\Request;

/**
 * Class ProyectoController
 * @package App\Http\Controllers
 */
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::paginate(10);

        return view('proyecto.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $proyecto = new Proyecto();
        return view('proyecto.create', compact('proyecto','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyecto $request)
    {
        // request()->validate(Proyecto::$rules);

        // $proyecto = Proyecto::create($request->all());
        $proyecto = new Proyecto();
        $proyecto->nombre = $request->nombre;
        $proyecto->estado  = $request->estado;
        $proyecto->fechaInicio = $request->fechaInicio;
        $proyecto->fechaFin = $request->fechaFin;
        $proyecto->requisitosFuncionales = $request->requisitosFuncionales;
        $proyecto->requisitosNoFuncionales = $request->requisitosNoFuncionales;
        $proyecto->avance = $request->avance;
        $proyecto->cliente_id = $request->cliente_id;
        $proyecto->save();
        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        $clientes = Cliente::all();
        return view('proyecto.edit', compact('proyecto','clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proyecto $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        // request()->validate(Proyecto::$rules);
        // $proyecto->update($request->all());
        $proyecto->nombre = $request->nombre;
        $proyecto->estado  = $request->estado;
        $proyecto->fechaInicio = $request->fechaInicio;
        $proyecto->fechaFin = $request->fechaFin;
        $proyecto->requisitosFuncionales = $request->requisitosFuncionales??'';
        $proyecto->requisitosNoFuncionales = $request->requisitosNoFuncionales??'';
        $proyecto->avance = $request->avance;
        $proyecto->cliente_id = $request->cliente_id;
        $proyecto->save();
        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id)->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto deleted successfully');
    }
}
