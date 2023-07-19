<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBanda extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        //valida formulario (si falta algo reenvia de nuevo a pagina de formulario)
        return [
            'name'=>'required|max:10',
            'descripcion'=>'required',
            'categoria'=>'required'
        ];
    }
    //personalizar mensaje de atributos
    public function attributes()
    {
        return [
            'name' => 'nombre de la banda',
        ];
    }
    //personalisar cada una de las reglas de validacion (required, max:10)
    public function messages(){
        return[
            'descripcion.required' => 'bede ingresar descripcion de Banda'
        ];
    }
}
