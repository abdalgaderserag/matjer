<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = Auth::getUser();
        return $user['type'] == 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:name',
            'value' => 'required|between:1,100000',
            'category' => 'required|integer|between:0,'. sizeof(config('matjer.category')),
            'count' => 'integer',
            'curr_type' => 'required|boolean',
            'details' => 'required',
            'images' => 'required',
        ];
    }
}
