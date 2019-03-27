<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasienRequest extends FormRequest
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
        $id=$this->pasiens;
        return [
            'nama' => 'required|max:255', 
            'alamat' => 'required|min:5',
            'tglLahir' => 'required',
            'file' => 'required'
        ];
    }
}
