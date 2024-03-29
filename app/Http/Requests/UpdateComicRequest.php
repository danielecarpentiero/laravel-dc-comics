<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:60',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|decimal:2',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:50',
            'artists' => 'required|max:200',
            'writers' => 'required|max:200',
        ];
    }
}
