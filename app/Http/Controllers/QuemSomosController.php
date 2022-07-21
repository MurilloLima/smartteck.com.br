<?php

namespace App\Http\Controllers;

use App\Models\QuemSomos;
use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = QuemSomos::all()->sortDesc();
        return view('admin.pages.quem-somos.index', compact('data'));
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
        QuemSomos::create($request->all());
        return redirect()->back()->with('msg', 'Cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuemSomos  $quemSomos
     * @return \Illuminate\Http\Response
     */
    public function show(QuemSomos $quemSomos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuemSomos  $quemSomos
     * @return \Illuminate\Http\Response
     */
    public function edit(QuemSomos $quemSomos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuemSomos  $quemSomos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuemSomos $quemSomos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuemSomos  $quemSomos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        QuemSomos::destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
