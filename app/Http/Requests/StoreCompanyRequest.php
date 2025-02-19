<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            
            'company_name' => ['required', 'string', 'max:255'],
            'company_phone' => ['required', 'string', 'max:255'],
            'company_address_line_1' => ['required', 'string', 'max:255'],
            'company_postal_code' => ['required', 'string', 'max:255'],
            'company_state' => ['required', 'string', 'max:255'],
            'company_city' => ['required', 'string', 'max:255'],
            'company_country' => ['required', 'string', 'max:255'],
            'company_registration' => ['required_if:business_type,Company', 'string', 'max:255'],
            'business_type' => ['required', 'string', 'max:255'],
        ];
    }
}
