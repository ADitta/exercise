<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'enquiry' => ['required', 'min:3'],
            'email' => ['required', 'email', 'max:255'],
            'name' => ['required', 'min:2', 'max:255'],
            'productName' => ['required', 'string', 'max:255'],
            'productSlug' => ['required', 'string', 'exists:products,slug'],
        ];
    }
}
