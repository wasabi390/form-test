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
        'name' => ['required', 'string', 'max:255'],
        'gender' => ['required',],
        'email' => ['required', 'string', 'email', 'max:255'],
        'tel' => ['required', 'numeric', 'digits_between:10,11'],
        'address' => ['required',],
        'detail' => ['required',],
        'contact' => ['required','max:120'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'gender' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスはメール形式で入力してください',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.numeric' => '電話番号を数値で入力してください',
            'tel.digits_between' => '電話番号は5桁までの数字で入力してください',
            'address' => '住所を入力してください',
            'detail' => 'お問い合わせの種類を選択してください',
            'contact' => 'お問い合わせ内容を入力してください',
            'contact.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
