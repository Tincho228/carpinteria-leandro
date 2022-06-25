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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $product = $this->route()->parameter('product');
        $rules =  [
            'name' => 'required',
            'slug' => 'required|unique:products',
            'description'=>'required',
            'category_id' =>'required',
            'file'=>'required|image'
        ];

        if($product){
            $rules = ['slug'=>'required|unique:products,slug,' . $product->id];
        }

        return $rules;
    }
}
