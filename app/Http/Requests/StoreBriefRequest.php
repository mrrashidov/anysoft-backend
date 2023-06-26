<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBriefRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'service_ids' => 'required|json',
            'task_text' => 'required',
            'images' => 'nullable|json',
            'name' => 'nullable',
            'email' => 'nullable',
            'company_name' => 'nullable',
            'phone' => 'nullable',
            'how_know_us' => 'nullable|json',
            'budget_id' => 'required'
        ];
    }
}
