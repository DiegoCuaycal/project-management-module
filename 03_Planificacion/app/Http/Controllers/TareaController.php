<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTarea;
use App\Models\Tarea;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class TareaController
 * @package App\Http\Controllers
 */
class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::paginate(10);

        return view('tarea.index', compact('tareas'))
            ->with('i', (request()->input('page', 1) - 1) * $tareas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyectos = Proyecto::all();
        $users = User::all();
        $tarea = new Tarea();
        return view('tarea.create', compact('tarea','proyectos','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTarea $request)
    {
        // request()->validate(Tarea::$rules);

        // $tarea = Tarea::create($request->all());

        $tarea=new Tarea();
        $tarea->nombre  = $request->nombre;
        $tarea->fechainicio = $request->fechainicio;
        $tarea->fechafin = $request->fechafin;
        $tarea->avance = $request->avance;
        $tarea->save();
        return redirect()->route('tareas.index')
            ->with('success', 'Tarea created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);
        
        return view('tarea.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Tarea::find($id);
        $users = User::all();
        $proyectos = Proyecto::all();
        return view('tarea.edit', compact('tarea','proyectos','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tarea $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        // request()->validate(Tarea::$rules);
        // $tarea->update($request->all());
        $tarea->nombre  = $request->nombre;
        $tarea->fechainicio = $request->fechainicio;
        $tarea->fechafin = $request->fechafin;
        $tarea->avance = $request->avance;
        $tarea->save();
        return redirect()->route('tareas.index')
            ->with('success', 'Tarea updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarea = Tarea::find($id)->delete();

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea deleted successfully');
    }
}
