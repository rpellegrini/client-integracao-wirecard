<?php

namespace App\Http\Requests;

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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name'        => 'required',
          'email'       => 'required',
          'birthDate'   => 'required',
          'document'    => 'required',
          'areaCode'    => 'required',
          'phone'       => 'required',
          'street'      => 'required',
          'streetNumber'=> 'required',
          'district'    => 'required',
          'zipCode'     => 'required',
          'city'        => 'required',
          'state'       => 'required',
        ];
    }

    public function messages()
   {
       return [
           'name.required'         => 'O campo é obrigátorio',
           'email.required'        => 'O campo é obrigátorio',
           'birthDate.required'    => 'O campo é obrigátorio',
           'document.required'     => 'O campo é obrigátorio',
           'areaCode.required'     => 'O campo é obrigátorio',
           'phone.required'        => 'O campo é obrigátorio',
           'street.required'       => 'O campo é obrigátorio',
           'streetNumber.required' => 'O campo é obrigátorio',
           'city.required'         => 'O campo é obrigátorio',
           'state.required'        => 'O campo é obrigátorio',
       ];
   }
}
