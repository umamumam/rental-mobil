<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
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
			'nama' => 'required',
			'mobil' => 'required',
			'plat' => 'required',
			'tanggal_mulai' => 'required',
			'tanggal_selesai' => 'required',
			'waktu' => 'required',
			'tarif' => 'required',
			'status_mobil' => 'required',
			'status_pembayaran' => 'required',
        ];
    }
}
