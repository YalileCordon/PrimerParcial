<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cambiar según tus necesidades de autorización
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'email' => 'required|email|max:255|unique:students,email,' . $this->student->id,
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'status' => 'required|boolean',
        ];
    }
}
