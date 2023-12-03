<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
        $method = $this->method();
        
        if ($method == 'PUT') {
            return [
                'name' => ['required'],
                'type' => ['required'],
                'price' => ['decimal:0,2'],
                'description' => ['required'],
                'is_in_stock' => ['boolean']
             ];
        }
        else {
            return [
                'name' => ['sometimes', 'required'],
                'type' => ['sometimes', 'required'],
                'price' => ['sometimes', 'decimal:0,2'],
                'description' => ['sometimes', 'required'],
                'is_in_stock' => ['sometimes', 'boolean']
             ];
        }
    }
}
