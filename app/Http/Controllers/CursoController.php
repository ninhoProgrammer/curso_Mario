<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate();
        return view('cursos.index', ['cursos' => $cursos]);
        //return view('cursos.index');
    }

    public function create()
    {
        return view('cursos.create');
    }
   
    public function store(StoreCurso $request)
    {
       /*
        $curso = new Curso();
        $curso->nombre = $request->input('nombre');
        $curso->descripcion = $request->input('descripcion');
        $curso->categoria = $request->input('categoria');
        $curso->save();*/
        $curso = Curso::create($request->all());         
        return redirect()->route('cursos.show', $curso)->with('success', 'Curso creado exitosamente.');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }
    

    public function update(Request $request,Curso $curso)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'categoria' => 'required|string|max:255',
        ]);

        $curso->nombre = $request->input('nombre');
        $curso->descripcion = $request->input('descripcion');
        $curso->categoria = $request->input('categoria');
        $curso->save();

        return redirect()->route('cursos.show', $curso)->with('success', 'Curso actualizado exitosamente.');
    }
    

    public function destroy(Curso $curso)
    {
        
        $curso->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso eliminado exitosamente.');
    }
}