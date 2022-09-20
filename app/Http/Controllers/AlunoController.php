<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function getList()
    {
        return response()->json(
            Aluno::all()
        );
    }

    public function getOne(int $id)
    {
        return response()->json(
            Aluno::findOrFail($id)
        );
    }

    public function post(Request $request)
    {
        {
            $aluno = Aluno::create(
                $request->all()
            );
            
    
            return response()->json($aluno);
        }
    

    }

    public function patch(Request $request, int $id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->nome = $request->get('nome');
        $aluno->email = $request->get('email');
        $aluno->nascimento = $request->get('nascimento');
        $aluno->curso = $request->get('curso');
        

        $aluno->save();

        return  response()->json($aluno);
    }

    public function delete(int $id) 
    {
        Aluno::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Aluno Deleted',
        ]);
    }
}