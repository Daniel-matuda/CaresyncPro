<?php

namespace App\Http\Controllers;

use App\Models\Anamnese;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AnamneseRequest;

class AnamneseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search =  request()->query('s');
        if ($search) {
            $anamneses = Anamnese::where('nome','like',"%{$search}%")->orWhere('local_do_atendimento','like',"%{$search}%")->paginate(20);
        } else {
            $anamneses = Anamnese::paginate(20);
        }

        return view('anamneses', [
            'title' => 'Listagem de fichas',
            'anamneses' => $anamneses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anamnese_create', [
            'title' => 'Criar uma ficha'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnamneseRequest $request)
    {
        $validated = $request->validated();

        // $saved = (new User)->create($validated);

        $saved =  ($anamnese = new Anamnese())->insert($validated);

        ($saved) ?
            Session::flash('success', 'Ficha cadastrada com sucesso.'):
            Session::flash('error', 'Erro ao cadastrar ficha');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Anamnese $anamnese)
    {
        return view('anamnese', [
            'title' => 'Ver ficha',
            'anamnese' => $anamnese
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anamnese $anamnese)
    {
        return view('anamnese_edit', [
            'title' => 'Editar ficha',
            'anamnese' => $anamnese
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anamnese $anamnese)
    {
        // $updated = $this->anamnese->where('id', $id)->update($request->all());

        $validated = $request->validate([
            'local_do_atendimento' => 'required',
            'nome' => 'required',
            'data' => 'required',
            'cor' => 'required',
            'estado_civil' => 'required',
            'profissao' => 'required',
            'nacionalidade' => 'required',
            'naturalidade' => 'required',
            'procedencia' => 'required',
            'endereco' => 'required'
        ]);

        $updated = $anamnese->update($validated);

        ($updated) ?
            Session::flash('updated_success', 'Atualizado com sucesso'):
            Session::flash('updated_error', 'Erro ao atualizar');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anamnese $anamnese)
    {
        $anamnese->delete();
        return back();
    }
}
