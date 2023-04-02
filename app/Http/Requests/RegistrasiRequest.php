<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        $rules = [
            'nama' => 'required',
            'nim' => 'required',
            'alamat' => 'required',
            'semester' => 'required',
            'jurusan' => 'required',
            'periode_masuk' => 'required',
            'periode_keluar' => 'required',
            'universitas' => 'required',
            'jenis_kelamin' => 'required',
            'telp' => 'required',
            'bidang_id' => 'required',

            'file_pengantar' => 'sometimes|mimes:pdf|max:2048',
            'photo' => 'sometimes|mimes:jpg,png,jpeg|max:2048',
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
            'file_pengantar.max' => 'Ukuran file melebihi ukuran yang direkomendasikan, yaitu kurang dari 2048 kb.',
            'file_pengantar.mimes' => 'Format file tidak sesuai.',
            'photo.max' => 'Ukuran file melebihi ukuran yang direkomendasikan, yaitu kurang dari 2048 kb.',
            'photo.mimes' => 'Format file foto tidak sesuai.',

        ];
    }
}
