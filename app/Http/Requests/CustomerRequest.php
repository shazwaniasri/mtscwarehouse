<?php

namespace App\Http\Requests;

use App\Customer;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'companyname' => [
                'required', 'min:3'
            ],

            'companyaddress' => [
                'required', 'min:3'
            ],

            'name' => [
                'required', 'min:3'
            ],
            
            'email' => [
                'required', 'email', Rule::unique((new Customer)->getTable())->ignore($this->route()->customer->id ?? null)
            ],
           

        ];
    }
}