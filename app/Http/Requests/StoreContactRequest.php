<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'required', 'min:2'],
            'title' => ['string', 'required', 'min:2'],
            'address' => ['string', 'required', 'min:5'],
            'email' => ['string', 'required', 'min:2'],
            'phone' => ['required', 'phone'],
            'picture' => ['string', 'url'],
        ];
    }
}
