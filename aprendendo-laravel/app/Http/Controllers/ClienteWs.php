<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteWs extends Controller
{
    public function index(){
        return response()->json('Deu Certo!');
    }
}
