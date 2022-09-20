<?php

declare(strict_types=1);

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function getList()
    {
        return response()->json(
            Curso::all()
        );
    }

    public function getOne(int $id)
    {
        return response()->json(
            Curso::findOrFail($id)
        );
    }

    public function post(Request $request)
    {

        {
            
            $curso = Curso::create(
                $request->all()
            );
    
            return response()->json($curso);
        }
    

    }

    public function patch(Request $request, int $id)
    {
        $curso = Curso::findOrFail($id);

        $curso->titulo = $request->get('titulo');
        $curso->descricao = $request->get('descricao');

        $curso->save();

        return  response()->json($curso);
    }

    public function delete(int $id) 
    {
        Curso::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Curso Deleted',
        ]);
    }
}