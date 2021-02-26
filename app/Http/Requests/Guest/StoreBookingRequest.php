<?php

namespace App\Http\Requests\Guest;

use Illuminate\Foundation\Http\FormRequest;
 use Illuminate\Contracts\Validation\Validator;
class StoreBookingRequest extends FormRequest
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
            'ticket_type' => 'required',
            'phone_number' => 'required',
            'mpesa_code' => 'required',
            'event_id' => 'required',
            'ticket_quantity' => 'required',
        ];
    }
     protected function failedValidation(Validator $validator)
        {
            if ($this->expectsJson()) {
                $errors = (new ValidationException($validator))->errors();
                throw new HttpResponseException(
                    response()->json(['data' => $errors], 422)
                );
            }

            parent::failedValidation($validator);
        }
}
