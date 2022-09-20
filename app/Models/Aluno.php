<?php 

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Aluno extends Model
{
    use HasFactory;

    protected $table = 'tb_aluno1';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
        'nome',
        'email',
        'nascimento',
        'curso',

    ];
}