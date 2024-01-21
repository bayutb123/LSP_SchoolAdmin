<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRoomRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'last_author_id' => 'required|integer',
            'name' => 'required|string',
            'floor' => 'required|integer',
            'type' => 'required|string',
            'size' => 'required|numeric',
            'size_unit' => 'required|string',
        ];
    }
}
