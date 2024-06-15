<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use App\Models\Missao;
use App\Models\Valores;
use App\Models\Noticia;
use App\Models\Slider;
use App\Models\Visao;

use function Pest\Laravel\put;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        $noticias = Noticia::all();
        $endereco = Endereco::find(1);

        $missao = Missao::find(1);
        $visao = Visao::find(1);
        $valores = Valores::find(1);

        return view('home.pages.index', compact('slider', 'noticias', 'endereco', 'missao', 'visao', 'valores'));
    }
    public function about($id)
    {
        $data = Noticia::find($id);
        return view('home.pages.about');
    }

    public function view($id)
    {
        $data = Noticia::find($id);
        $slider = Slider::all();
        $noticias = Noticia::all();
        $endereco = Endereco::find(1);
        return view('home.pages.noticia-view', compact('data', 'slider', 'endereco', 'noticias'));
    }

    public function transparency()
    {
        return view('home.pages.transparency');
    }
    public function bids()
    {
        return view('home.pages.bids');
    }
    public function news()
    {
        return view('home.pages.news');
    }
    public function service()
    {
        return view('home.pages.service');
    }
    public function contact()
    {
        return view('home.pages.contact');
    }

    public function api()
    {
        return view('home.pages.api');
    }

    public function cobrancas()
    {
        return view('https://cobrancas.smartteck.com.br/i');
    }

    
    
}
