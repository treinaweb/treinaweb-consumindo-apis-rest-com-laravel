<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class CursoRepository {

    public function create(array $dados)
    {
        Http::post('http://172.24.192.1:3002/api/treinaweb/curso', $dados);
    }
}