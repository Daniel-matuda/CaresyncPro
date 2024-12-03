<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExameRequest;
use Illuminate\Support\Facades\Session;

class ExameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exames = Exame::paginate(5);

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
            'title' => 'Criar exame'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExameRequest $request)
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
    public function show(Exame $exame)
    {
        return view('exame', [
            'title' => 'Ver resultado exame',
            'exame' => $exame
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exame $exame)
    {
        return view('exame_edit', [
            'title' => 'Editar Exame médico',
            'exame' => $exame
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exame $exame)
    {
        $validated = $request->validate([
            'QD' => 'nullable|string',
            'HMA' => 'nullable|string',
            'AP' => 'nullable|string',
            'AF' => 'nullable|string',
            'IDA' => 'nullable|string',
            'IDA_pf' => 'nullable|string',
            'IDA_cabeca' => 'nullable|string',
            'IDA_olhos' => 'nullable|string',
            'IDA_nariz' => 'nullable|string',
            'IDA_bg' => 'nullable|string',
            'IDA_acr' => 'nullable|string',
            'IDA_ad' => 'nullable|string',
            'IDA_gu' => 'nullable|string',
            'IDA_slh' => 'nullable|string',
            'IDA_sev' => 'nullable|string',
            'IDA_sn' => 'nullable|string',
            'IDA_al' => 'nullable|string',
            'IDA_qe' => 'nullable|string',
            'EFG_afg' => 'nullable|string',
            'EFG_pele' => 'nullable|string',
            'EFG_anexos' => 'nullable|string',
            'EFG_subcutaneo' => 'nullable|string',
            'EFG_gl' => 'nullable|string',
            'EFG_mucosas' => 'nullable|string',
            'EFG_osteomuscular' => 'nullable|string',
            'EFG_peso' => 'nullable|string',
            'EFG_altura' => 'nullable|string',
            'EFG_PA' => 'nullable|string',
            'EFG_FC' => 'nullable|string',
            'EFG_FR' => 'nullable|string',
            'EFG_T' => 'nullable|string',
            'EFE_sc_cranio' => 'nullable|string',
            'EFE_sc_olhos' => 'nullable|string',
            'EFE_sc_nariz' => 'nullable|string',
            'EFE_sc_dfm' => 'nullable|string',
            'EFE_sc_boca' => 'nullable|string',
            'EFE_sc_orofaringe' => 'nullable|string',
            'EFE_sc_pescoco' => 'nullable|string',
            'EFE_ar_ie' => 'nullable|string',
            'EFE_ar_id' => 'nullable|string',
            'EFE_ar_palpacao' => 'nullable|string',
            'EFE_ar_percussao' => 'nullable|string',
            'EFE_ar_ausculta' => 'nullable|string',
            'EFE_ac_inspecao' => 'nullable|string',
            'EFE_ac_palpacao' => 'nullable|string',
            'EFE_ac_ausculta' => 'nullable|string',
            'EFE_ac_arterias' => 'nullable|string',
            'EFE_abdome_inspecao' => 'nullable|string',
            'EFE_abdome_ausculta' => 'nullable|string',
            'EFE_abdome_percussao' => 'nullable|string',
            'EFE_abdome_figado' => 'nullable|string',
            'EFE_abdome_baco' => 'nullable|string',
            'EFE_abdome_rins' => 'nullable|string',
            'EFE_abdome_ps' => 'nullable|string',
            'EFE_abdome_pd' => 'nullable|string',
            'EFE_agu_ar' => 'nullable|string',
            'EFE_agu_ge' => 'nullable|string',
            'EFE_cv_inspecao' => 'nullable|string',
            'EFE_cv_pmc' => 'nullable|string',
            'EFE_cv_membros' => 'nullable|string',
            'EFE_sn_ep' => 'nullable|string',
            'EFE_sn_mv-fm-cm' => 'nullable|string',
            'EFE_sn_sensibilidade' => 'nullable|string',
            'EFE_hd1' => 'nullable|string',
            'EFE_hd2' => 'nullable|string',
            'EFE_hd3' => 'nullable|string',
            'EFE_hd4' => 'nullable|string',
            'EFE_hd5' => 'nullable|string',
            'EFE_hd6' => 'nullable|string',
            'EFE_hd7' => 'nullable|string',
            'EFE_hd8' => 'nullable|string',
            'EFE_hd9' => 'nullable|string',
            'EFE_hd10' => 'nullable|string',
            'EFE_sec_bioquimicos' => 'nullable|string',
            'EFE_sec_microbiologicos' => 'nullable|string',
            'EFE_sec_di' => 'nullable|string',
            'EFE_ct_nm' => 'nullable|string',
            'EFE_ct_medicamentosa' => 'nullable|string',
            'EFE_ct_procedimentos' => 'nullable|string',
            'EFE_ct_cirurgia' => 'nullable|string',
            'Aluno' => 'nullable|string',
            'Codigo' => 'nullable|string',
            'Professor' => 'nullable|string',
        ]);
    
        $updated = $exame->update($validated);
    
        ($updated) ?
            Session::flash('updated_success', 'Atualizado com sucesso') :
            Session::flash('updated_error', 'Erro ao atualizar');
    
        return back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exame $exame)
    {
        $exame->delete();
        return back();
    }
}
