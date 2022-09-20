<?php

declare(strict_types=1);

namespace App\Http\Controllers;



use App\Models\Aluno;

class WebAlunoController extends Controller
{
    public function list()
    {
        return view('aluno.list', [
            'aluno' => Aluno::all(),
        ]);
    }
}