<?php

namespace App\Http\Controllers;

use App\Models\Missao;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MissaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Missao::all()->sortDesc();
        return view('admin.pages.missao.index', compact('data'));
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
        $slider = new Missao();
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
            $image->move(public_path('images/messao'), $nameFile);
        }
        $slider->file = $nameFile;
        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->slug = Str::slug($request->title);
        $slider->save();

        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Missao  $missao
     * @return \Illuminate\Http\Response
     */
    public function show(Missao $missao)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Missao  $missao
     * @return \Illuminate\Http\Response
     */
    public function edit(Missao $missao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Missao  $missao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Missao $missao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Missao  $missao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Missao::destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
