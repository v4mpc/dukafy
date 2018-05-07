<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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

    public function messages(){

        return[
            // 'password_confirmation.confirmed' => ' The Passwords do not match',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'name'=>'required|max:50',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed|min:6',
            'image'=>'nullable|sometimes|image'
        ];
    }
}
