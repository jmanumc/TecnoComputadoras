<?php

namespace TecnoComputadoras\Http\Requests;

use TecnoComputadoras\Http\Requests\Request;

class UserRequest extends Request
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
            'name'                  => 'min:3|required',
            'email'                 => 'email|unique:users|required',
            'password'              => 'same:password_confirmation|min:4|required',
            'password_confirmation' => 'required',
            'type'                  => 'in:admin,member|required',
            'avatar'                => 'image'
        ];
    }
}
