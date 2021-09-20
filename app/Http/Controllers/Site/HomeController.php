<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Demanda;
use Session;

class HomeController extends Controller
{
    public function Index(){
        $registros = Demanda::lista();
        return view('home', compact('registros'));
    }
}
