<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        //baguhin muna natin sa true yung irereturn
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'userName' => ['required','alpha','min:6','max:50'],
            'userEmail' => ['required','email', 'string'],
            'userPassword' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'userName.required' => 'The user name field is required men!',
            'userName.alpha' => 'Letters lang pwede sa user name.',
            'userName.min' => 'kulang yung letter minimum natin 6',
            'userEmail.required' => 'Kailangan ng email.',
        ];
    }
}
