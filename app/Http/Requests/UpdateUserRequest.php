<?php

namespace TecnoComputadoras\Http\Requests;

use TecnoComputadoras\Http\Requests\Request;

class UpdateUserRequest extends Request
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
            'email'                 => 'email|required',
            'password'              => 'same:password_confirmation|min:4',
            'type'                  => 'in:admin,member|required',
            'avatar'                => 'image'
        ];
    }
}
