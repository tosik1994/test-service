<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:255',
            'phone'=>'required|max:255',
            'email'=>'required|email|max:255',
            'product'=>'required|max:255',
            'description'=>'nullable',
            'address'=>'nullable|max:255',
            'house_number'=>'nullable|max:255',
            'apartment_number'=>'nullable|max:255',
        ];
    }
}
