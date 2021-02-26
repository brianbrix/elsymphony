<?php

namespace App\Http\Requests\Guest;

use Illuminate\Foundation\Http\FormRequest;
 use Illuminate\Contracts\Validation\Validator;
class StoreUserRequest extends FormRequest
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

            'first_name' => 'required',
            'user_email' => 'required|email',
            'last_name' => 'required',
            'phone_number' => 'required',
            'user_password' => 'required_with:confirm_password|same:confirm_password',

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
