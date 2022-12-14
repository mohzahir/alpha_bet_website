<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEmployeeRequest extends FormRequest
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
                'job_title' => 'min:3|string',
                'job_title_ar' => 'min:3|string',
                'facebook_link' => 'min:3|string',
                'linkedin_link' => 'min:3|string',
                'twitter_link' => 'min:3|string',
                'status' => 'nullable',
                'photo' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
            ];
        } else {
            //add
            return [
                'name' => 'required|min:3|string',
                'name_ar' => 'required|min:3|string',
                'job_title' => 'min:3|string',
                'job_title_ar' => 'min:3|string',
                'facebook_link' => 'min:3|string',
                'linkedin_link' => 'min:3|string',
                'twitter_link' => 'min:3|string',
                'status' => 'nullable',
                'photo' => 'mimes:jpg,png,jpeg,gif,svg',
            ];
        }
    }
}
