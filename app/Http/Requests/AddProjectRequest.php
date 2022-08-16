<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProjectRequest extends FormRequest
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
                'service_id' => 'required|exists:services,id',
                'client_id' => 'required|exists:clients,id',
                'start_date' => 'required|date',
                'finish_date' => 'required|date',
                'location' => 'required|string|min:3',
                'location_ar' => 'required|string|min:3',
                'name' => 'required|min:3|string',
                'name_ar' => 'required|min:3|string',
                'short_descr' => 'required|min:5|string',
                'short_descr_ar' => 'required|min:5|string',
                'descr' => 'required|min:10|string',
                'descr_ar' => 'required|min:10|string',
                'is_featured' => 'nullable|in:0,1',
                'status' => 'nullable',
                'photo' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
            ];
        } else {
            //add
            return [
                'service_id' => 'required|exists:services,id',
                'client_id' => 'required|exists:clients,id',
                'start_date' => 'required|date',
                'finish_date' => 'required|date',
                'location' => 'required|string|min:3',
                'location_ar' => 'required|string|min:3',
                'name' => 'required|min:3|string',
                'name_ar' => 'required|min:3|string',
                'short_descr' => 'required|min:5|string',
                'short_descr_ar' => 'required|min:5|string',
                'descr' => 'required|min:10|string',
                'descr_ar' => 'required|min:10|string',
                'is_featured' => 'nullable|in:0,1',
                'status' => 'nullable',
                'photo' => 'required|mimes:jpg,png,jpeg,gif,svg',
                'project_imgs' => 'required',
            ];
        }
    }
}
