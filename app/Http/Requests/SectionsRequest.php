<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionsRequest extends FormRequest
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
            'name'=>'required|string|unique:section_translations,name,'.$this->id.',section_id',

        ];
    }
    public function messages(): array
{
    return [
        'name.required' => 'الاسم مطلوب',
        'name.string' => 'يجب ان يحتوى على حروف',
        'name.unique' => 'هذا الاسم موجود من قبل',

    ];
}
}
