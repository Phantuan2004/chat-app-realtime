<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
    public function rules()
    {
        $userId = $this->route('id');

        return [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($userId)],
            'password' => $this->isMethod('post') ? 'required|min:6' : 'nullable|min:6',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'phone' => 'nullable|string|max:20',
            'gender' => 'nullable|string|in:male,female,other',
            'date_of_birth' => 'nullable|date'
        ];
    }


    public function messages()
    {
        return [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Email is invalid',
                'email.unique' => 'Email is already taken',
                'password.required' => 'Password is required',
                'password.min' => 'Password must be at least 6 characters',
                'avatar.image' => 'Avatar must be an image',
                'avatar.mimes' => 'Avatar must be a file of type: jpeg, png, jpg',
                'avatar.max' => 'Avatar may not be greater than 10 megabytes',
                'phone.max' => 'Phone may not be greater than 20 characters',
                'gender.in' => 'Gender must be one of the following: male, female, other',
                'date_of_birth.date' => 'Date of birth must be a valid date',
        ];
    }
}
