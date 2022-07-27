<?php

namespace App\Http\Controllers;

use App\Models\Valores;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ValoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Valores::all()->sortDesc();
        return view('admin.pages.valores.index', compact('data'));
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
        $valores = new Valores();
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
            $image->move(public_path('images/valores'), $nameFile);
        }
        $valores->file = $nameFile;
        $valores->title = $request->title;
        $valores->content = $request->content;
        $valores->slug = Str::slug($request->title);
        $valores->save();

        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Valores  $valores
     * @return \Illuminate\Http\Response
     */
    public function show(Valores $valores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Valores  $valores
     * @return \Illuminate\Http\Response
     */
    public function edit(Valores $valores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Valores  $valores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Valores $valores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Valores  $valores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Valores::destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
