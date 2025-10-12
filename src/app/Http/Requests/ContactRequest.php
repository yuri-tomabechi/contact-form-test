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
            //
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'array'],           
            'tel.0' => ['required'],
            'tel.1' => ['required'], 
            'tel.2' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'category' => ['required'],
            'detail' => ['required'],
        ];
    }


    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメールアドレス形式で入力してください',
            'tel.0.required' => '電話番号を入力してください',
            'tel.1.required' => '電話番号を入力してください',
            'tel.2.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'category.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合せ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
