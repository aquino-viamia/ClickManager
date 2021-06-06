<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Inventario extends Controller
{
    public function inventariolista()
    {
        return view('administrativo.inventario.show');
    }

}
