<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CursoRepository;

class CursoController extends Controller
{
    public function create(CursoRepository $cursoRepository)
    {
        $resposta = $cursoRepository->create([
            'nome' => 'PHP OO parte 2',
            'linguagem' => 'PHP'
        ]);

        if ($resposta) {
            return 'criado com sucesso';
        }

        return 'Erro ao criar';
    }

    public function update(CursoRepository $cursoRepository)
    {
        $resposta = $cursoRepository->update('59aeX7V3JRiQzNBZ', [
            'nome' => 'PHP Orientado a Objetos',
            'linguagem' => 'PHP'
        ]);

        if ($resposta) {
            return 'atualizado com sucesso';
        }

        return 'Erro ao atualizar';
    }

    public function delete(CursoRepository $cursoRepository)
    {
        $resposta = $cursoRepository->delete('59aeX7V3JRiQzNBZ');

        if ($resposta) {
            return 'deletado com sucesso';
        }

        return 'Erro ao deletar';
    }
}
