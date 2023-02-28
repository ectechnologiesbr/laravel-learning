<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotesFormRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'titulo' => ['required', 'min:2'],
            'nivel'=> ['required'],
            'descricao'=> ['required', 'min:10'],
        ];
    }
}
