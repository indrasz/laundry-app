<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaundryRequest extends FormRequest
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
            'name' => 'required|max:255',
            'phoneNumber' => 'required|max:255',
            'clothes' => 'required|max:255',
            'category' => 'required|max:255',
            'weight' => 'required|integer',
            'price' => 'required|integer',
            'message' => 'required',
        ];
    }
}
