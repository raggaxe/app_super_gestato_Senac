<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {

        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000;/000-00',
                'ddd' => '11', //sp
                'fone' => '9823452'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '00.000.000/0001-11',
                'ddd' => '61', //df
                'fone' => '92124532'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '00.000.000/0001-22',
                'ddd' => '85', //fortaleza
                'fone' => '832345632'
            ]
        ];

        return view('app.fornecedor.index', ['fornecedores' => $fornecedores]);
    }
}
