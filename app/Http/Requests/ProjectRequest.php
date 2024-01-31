<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name'=> 'required|min:3',
            'client_name' => 'required',
            'summary' => 'required|min:3',
            'cover_image' => 'image|nullable|max:32000'
        ];
    }

    public function messages()
    {
        return[

            'name.required' => 'Il nome del progetto è obbligatorio',
            'name.min' => 'Il numero minimo di caratteri nel titolo è 3',
            'client_name.required' => 'Il nome del cliente è obbligatorio',
            'summary.required' => 'La descrizzione è obbligatoria',
            'summary.required' => 'Il numero minimo dei caratteri nella descrizzione è 3',
            'cover_image.image' => 'Il file deve essere un immagine',
            'cover_image.max' => 'Il file non puo essere più grande di 3M'
        ];
    }
}
