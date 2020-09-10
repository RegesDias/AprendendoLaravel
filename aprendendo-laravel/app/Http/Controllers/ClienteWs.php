<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteWs extends Controller
{
    public function index(){
        return response()->json('Deu Certo!');
    }
}
