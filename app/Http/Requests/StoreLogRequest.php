<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
           'name' => 'required|string|max:72',
           'document' => 'required|string|max:20',
           'answer' => 'required|string|max:225',
           'commentaries' => 'required|string|max:225',
        ];
    }
}
