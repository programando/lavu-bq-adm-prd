<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//Facades
use Config;
use Lang;
use Route;

class UserRequest extends FormRequest
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
         $ruta = Route::currentRouteName() ;
        // dd('reglas');

          $rules = [
                    'email'     => [
                            'required',
                            'email',
                            'exists:terceros',
                            'max:' . trans('app_db.email_maxlength'),
                        ],

                    'pass_usuario' => [
                            'required',
                        ],

                    'remember_me' => [
                            'in:true',
                        ],

          ];

        return $rules;
    }

    /* Método para renombrar el tútulo de los campos */
    public function attributes () {
            return [
                'email'        => trans('app_db.email'),
                'pass_usuario' => trans('app_db.pass_usuario'),
            ];
    }

    /* Método para renombar los mensajes de validación */
    public function messages() {
        return [
            'email.exists' => trans('app_errors.email_no_existe'),
        ];


    }


}
