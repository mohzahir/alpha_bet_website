<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAboutRequest extends FormRequest
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
            'descr' => 'required|min:10|string',
            'descr_ar' => 'required|min:10|string',
            // 'goal' => 'required',
            // 'goal_ar' => 'required',
            'mission' => 'required',
            'mission_ar' => 'required',
            'vision' => 'required',
            'vision_ar' => 'required',
            'skill1_name' => 'required',
            'skill1_name_ar' => 'required',
            'skill1_rate' => 'required|numeric',
            'skill2_name' => 'required',
            'skill2_name_ar' => 'required',
            'skill2_rate' => 'required|numeric',
            'skill3_name' => 'required',
            'skill3_name_ar' => 'required',
            'skill3_rate' => 'required|numeric',
            'skill4_name' => 'required',
            'skill4_name_ar' => 'required',
            'skill4_rate' => 'required|numeric',
            'video_url' => 'required',
        ];
    }
}
