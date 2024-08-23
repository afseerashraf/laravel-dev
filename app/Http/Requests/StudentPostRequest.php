<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentPostRequest extends FormRequest
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
            'studentName' => ['required', 'alpha'],
            'email' => ['required', 'email'],
            'mobile' => ['required', 'numeric'],
            'dob' => ['required', 'date'],
            'cource' => ['required'],

        ];
    }
}
