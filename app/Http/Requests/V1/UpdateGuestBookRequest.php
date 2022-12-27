<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGuestBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // no user authorization feature
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return [
            'name' => ['required'],
            'message' => ['required'],
            ];
        } else { // PATCH request; update partially 
            return [
            'name' => ['sometimes', 'required'],
            'message' => ['sometimes', 'required'],
            ];
        }
    }
}
