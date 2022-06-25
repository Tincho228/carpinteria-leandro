<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $category = $this->route()->parameter('category');
        $rules =  [
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'description'=>'required',
            'file'=>'required|image'
        ];

        if($category){
            $rules = ['slug'=>'required|unique:categories,slug,' . $category->id];
        }

        return $rules;
    }
}
