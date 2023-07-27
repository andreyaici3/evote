<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaslonRequest extends FormRequest
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
            'nomor_urut' => ['required', 'unique:paslons'],
            'foto' => ['required', 'mimes:jpg,bmp,png',],
            'nama_paslon' => ['required']
        ];
    }
}
