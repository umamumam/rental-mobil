<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MobilRequest extends FormRequest
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
        return
        [
			'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
			'merek' => 'required',
			'model' => 'required',
			'no_plat' => 'required',
			'tarif' => 'required',
			'kapasitas' => 'required',
			'status' => 'required',
        ];
    }
}
