<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
         'name'           => 'required|max:60|min:3',
         'last_name'      => 'required|max:90|min:3',
         'document'       => 'required|min:6',
         'date_of_birth'  => 'required',
         'email'          => 'required|max:90|min:6',
         'phone'          => 'required|min:6',
         'country'        => 'required|max:40|min:3',
         'city'           => 'required|max:40|min:3',
         'address'        => 'required|max:120|min:3',
         // 'avatar'         => 'required|image|mimes:png,jpeg,jpg,gif,svg|max:2048',            
         'note'           => 'required|max:80|min:5',
         'coment'         => 'required|max:100|min:5',
      ];
   }
}
