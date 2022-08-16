<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
        if (request()->isMethod('patch')) {
            // edit
            return [
                'name' => 'required|min:3|string',
                'name_ar' => 'required|min:3|string',
                'descr' => 'required|min:10|string',
                'descr_ar' => 'required|min:10|string',
                'is_featured' => 'nullable|in:0,1',
                'status' => 'nullable',
                'photo' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
            ];
        } else {
            //add
            return [
                'name' => 'required|min:3|string',
                'name_ar' => 'required|min:3|string',
                'descr' => 'required|min:10|string',
                'descr_ar' => 'required|min:10|string',
                'is_featured' => 'nullable|in:0,1',
                'status' => 'nullable',
                'photo' => 'required|mimes:jpg,png,jpeg,gif,svg',
            ];
        }
    }
}
