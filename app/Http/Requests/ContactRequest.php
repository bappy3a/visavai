<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'regex:/^([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}|(\+880|880|0)?1[3-9]\d{8})$/'],
            'verification_type' => ['required', 'string', 'in:visa,air_ticket,offer_letter'],
            'message' => ['required', 'string'],
            'files.*' => ['nullable', 'file', 'mimes:pdf,doc,docx,jpg,jpeg,png,gif,webp', 'max:5120'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.regex' => 'ইমেইল অথবা মোবাইল নম্বর সঠিক নয়। ইমেইল (example@email.com) অথবা মোবাইল নম্বর (01XXXXXXXXX) দিন।',
        ];
    }
}
