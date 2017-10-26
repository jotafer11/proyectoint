<?php

namespace sisBiblioteca\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroFormRequest extends FormRequest
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
            'titulo' => 'required|max:100',
            'idioma' => 'required|max:100',
            'estado' => 'required|max:100',
            'idcategoria' => 'required',
            'ideditorial' => 'required',
            'idautor' => 'required',

        ];
    }
}


