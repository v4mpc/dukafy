<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrder extends FormRequest
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
            'first_name'=>'required|min:2|max:100',
            'last_name'=>'required|min:2|max:100',
            'address'=>'required|min:2|max:100',
            'phone'=>'required|min:2|max:100',
            'email'=>'required|email|max:100',
        ];
    }
}
