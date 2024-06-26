<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFotoPosterOutputRequest extends FormRequest
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
            'jenis_output_id' => ['required', 'exists:jenis_output,id'],
            'judul_output' => ['required', 'max:254'],
            'file' => ['required', 'file', 'mimes:jpg,png,jpeg', 'max:512'],
        ];
    }
}
