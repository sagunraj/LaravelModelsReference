<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
        $method = $this->method();
            switch($method){
                case 'POST':{
                    return [
                        "name" => "required|max:255|unique:tags,name"
                    ];
                }

                case 'PUT':{
                    return[
                      "name"=> "required|max:255",
                        "slug"=>"required|alpha_dash|unique:posts,slug,".$this->segment(2)
                    ];
                }

                default:{
                    return [];
                }

            }
    }
}
