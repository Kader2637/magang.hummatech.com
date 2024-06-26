<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripayCheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'total' => 'integer|required',
            'tax' => 'nullable|integer',
            'payment_code' => 'required',
            'payment_name' => 'required',
            'discount' => 'nullable|integer',
            'user_id' => 'required|exists:users,id',
            'voucher_code' => 'nullable|exists:vouchers,code_voucher',
        ];
    }

    public function messages()
    {
        return [
            'amount.integer' => 'Jumlah harus berupa bilangan bulat',
            'amount.required' => 'Jumlah diperlukan',
            'payment_code.required' => 'Kode pembayaran diperlukan',
            'payment_name.required' => 'Nama pembayaran diperlukan',
            'user_id.required' => 'ID pengguna diperlukan',
            'user_id.exists' => 'ID pengguna tidak ada',
        ];
    }
}
