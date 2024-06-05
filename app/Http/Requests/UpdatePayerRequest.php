<?php

namespace App\Http\Requests;

use App\Models\Payer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePayerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payer_edit');
    }

    public function rules()
    {
        return [
            'first_name' => [
                'string',
                'required',
            ],
            'last_name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'sumsub_token' => [
                'string',
                'nullable',
            ],
        ];
    }
}
