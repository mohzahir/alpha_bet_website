<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSettingRequest extends FormRequest
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
            'company_name' => 'required',
            'company_name_ar' => 'required',
            'logo' => 'nullable|dimensions:132,50',
            'logo_black' => 'nullable|dimensions:132,50',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'linkedin_link' => 'nullable',
            'youtube_link' => 'nullable',
            'instagram_link' => 'nullable',
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => 'required',
            'location' => 'required',
            'location_ar' => 'required',
            'google_map_link' => 'required',
        ];
    }
}
