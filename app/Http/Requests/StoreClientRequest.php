<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birthday' => 'required|date',
            'gender' => 'required|between:1,3',
            'panic_button' => 'required|between:1,3',
            'relation' => 'required|between:1,2',
            'color' => 'required|between:1,4',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048',
        ];
    }
}
