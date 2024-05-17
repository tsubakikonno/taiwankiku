<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'opinion'=> 'required|string|max:255',
              
          ];
    }

    public function messages()
    {
      return [
        'name.required' => '名前を入力してください。',
        'email.required' => 'メールアドレスを入力してください。',
        'opinion.required'=> 'ご予約や質問を入力してください。',

       
      ];
    }
  
}
