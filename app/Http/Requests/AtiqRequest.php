<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtiqRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'file' => 'mimes:doc,docx,pdf',
            'logo' => 'mimes:jpg,png,svg,jpeg,webp',
            'name' => 'required'
        ];
    }
}
