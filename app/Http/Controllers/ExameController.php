<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ExameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exames = Exame::paginate(20);

        return view('exames', [
            'title' => 'Listagem de exames',
            'exames' => $exames
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exame_create', [
            'title' => 'Exame médico'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validated();


        $saved =  ($exame = new Exame())->insert($validated);

        ($saved) ?
            Session::flash('success', 'Exame cadastrado com sucesso.'):
            Session::flash('error', 'Erro ao cadastrar o Exame');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
