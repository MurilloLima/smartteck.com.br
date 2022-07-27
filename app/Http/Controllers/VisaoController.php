<?php

namespace App\Http\Controllers;

use App\Models\Visao;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VisaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Visao::all()->sortDesc();
        return view('admin.pages.visao.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visao = new Visao();
        // upload de image
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            # code...
            $image = $request->file;
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
            // Recupera a extensão do arquivo
            $extension = $image->extension();
            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";
            $image->move(public_path('images/visao'), $nameFile);
        }
        $visao->file = $nameFile;
        $visao->title = $request->title;
        $visao->content = $request->content;
        $visao->slug = Str::slug($request->title);
        $visao->save();

        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visao  $visao
     * @return \Illuminate\Http\Response
     */
    public function show(Visao $visao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visao  $visao
     * @return \Illuminate\Http\Response
     */
    public function edit(Visao $visao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visao  $visao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visao $visao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visao  $visao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visao::destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
