<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        /*$method = $this->method();
        switch ($method){
            case 'POST':{
                return [
                    "category_id"=>"required|Numeric",
                    "title"=>"required|max:255",
                    "content"=>"required"
                ];
            }

            case 'PUT':{
                return [
                    "category_id"=>"required|Numeric",
                    "title"=>"required|max:255",
                    "content"=>"required"
                ];
            }

            default:
                return [];
        }*/

        return[
            "category_id"=>"required|exists:categories,id",
            "title"=>"required|max:255",
            "slug"=>"required|alpha_dash",
            "content"=>"required|max:4000"
        ];

    }

    public function messages()
    {
        return [
            'category_id.exists'=>"Please select a valid category."
        ];
    }
}
