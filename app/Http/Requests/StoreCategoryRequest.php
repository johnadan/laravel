<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
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
            // 'full_name' => ['required', 'string', 'max:255'],
            // 'display_name' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255', 'unique:categories'],
        ];
    }

    public function messages()
    {
        return [
            // 'full_name.required' => 'Full Name is required',
            // 'display_name.required' => 'Display Name is required',
            'name.required' => 'Name is required',
        ];
    }
}
