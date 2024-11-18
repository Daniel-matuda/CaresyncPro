<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
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
        ];
    }
}
