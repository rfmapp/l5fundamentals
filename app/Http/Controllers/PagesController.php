<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    // Funçao que controla a exibiçao da pagina "sobre".
    public function about()
    {
        // Passagem de variaveis (dados) na renderizaçao da pagina.
        $first_name = 'Rafael';
        $last_name = 'Marques';
        // Chamada da view da pagina "sobre" junto com os dados acima (first_name e last_name).
        return view('pages.about', compact('first_name', 'last_name'));
    }
}
