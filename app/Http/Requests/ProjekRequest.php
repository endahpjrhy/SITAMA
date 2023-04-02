<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjekRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        $rules = [
            'judul' => 'required',
            'desc' => 'required',
            'file_name' => 'sometimes|mimes:doc,docx,xls,xlsx,pdf,jpg,png,jpeg|max:2048',
        ];

        return $rules;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            "required" => ":attribute harus diisi",
            'file_name.max' => 'Ukuran file melebihi ukuran yang direkomendasikan, yaitu kurang dari 2048 kb.',
            'file_name.mimes' => 'Format file tidak sesuai.',
        ];
    }
}
