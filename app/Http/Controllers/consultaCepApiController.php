<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class consultaCepApiController extends Controller
{
    public function index()
    {
        $cep = 
        $response = file_get_contents("https://viacep.com.br/ws/{{$cep}}/json");
        $response  = json_decode($response);
        var_dump($response);
    }
}
