<?php

namespace App\Http\Controllers;

use App\Models\Missao;
use App\Models\Slider;
use App\Models\Valores;
use App\Models\Visao;
use Illuminate\Http\Request;
use App\Models\Noticias;

class HomeController extends Controller
{
    public function index()
    {
        // SuaClasse::where('chave_estrangeira', $chave)->orderBy('created_at', 'desc')->first();
        $slider = Slider::all()->sortDesc();
        $visao = Visao::all()->sortDesc();
        $missao = Missao::all()->sortDesc();
        $valores = Valores::all()->sortDesc();
        $noticias = Noticias::all()->sortDesc();

        return view('home.pages.index', compact('slider', 'visao', 'missao', 'valores', 'noticias'));
    }

    public function contact()
    {
        return view('home.pages.contact');
    }

    public function store(Request $request)
    {
    }

    public function noticias()
    {
        $data = Noticias::all();
        return view('home.pages.noticias', compact('data'));
    }
}
