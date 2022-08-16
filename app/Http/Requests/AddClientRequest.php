<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddClientRequest extends FormRequest
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
                'phone' => 'required|min:9',
                'email' => 'required|email',
                'location' => 'required|string',
                'location_ar' => 'required|string',
                'descr' => 'required|min:5|string',
                'descr_ar' => 'required|min:5|string',
                'is_featured' => 'nullable|in:0,1',
                'logo' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
            ];
        } else {
            //add
            return [
                'name' => 'required|min:3|string',
                'name_ar' => 'required|min:3|string',
                'phone' => 'required|min:9',
                'email' => 'required|email',
                'location' => 'required|string',
                'location_ar' => 'required|string',
                'descr' => 'required|min:5|string',
                'descr_ar' => 'required|min:5|string',
                'is_featured' => 'nullable|in:0,1',
                'logo' => 'required|mimes:jpg,png,jpeg,gif,svg',
            ];
        }
    }
}
