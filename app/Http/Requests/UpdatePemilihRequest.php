<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePemilihRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nik' => ['required', 'unique:pemilihs'],
            'nama_lengkap' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'alamat' => ['required'],
            'jenis_kelamin' => ['required'],
            'username' => ['required', 'unique:pemilihs'],
            'password' => ['required'],
        ];
    }
}
