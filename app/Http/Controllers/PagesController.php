<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    // Função que controla a exibição da página "sobre".
    public function about()
    {
        // Passagem de variáveis (dados) na renderização da página.
        $first_name = 'Rafael';
        $last_name = 'Marques';
        // Chamada da view da página "sobre" junto com os dados acima (first_name e last_name).
        return view('pages.about', compact('first_name', 'last_name'));
    }

    // Função de controla a exibição da página "contato".
    public function contact()
    {
        return view('pages.contact');
    }
}
