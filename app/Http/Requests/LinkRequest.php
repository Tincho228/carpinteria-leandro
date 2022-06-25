<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
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
        $link = $this->route()->parameter('link');
        $rules =  [
            'name' => 'required',
            'slug' => 'required|unique:links',
            'url' => 'required'
        ];

        if($link){
            $rules = ['slug'=>'required|unique:links,slug,' . $link->id];
        }

        return $rules;
    }
}
