<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoutineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //使わない場合はtrueを返す
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
            //
            'title' => 'required|string|max:20',
            'task0' => 'required|string|max:20',
            'task1' => 'string|nullable|max:20',
            'task2' => 'string|nullable|max:20',
            'task3' => 'string|nullable|max:20',
            'task4' => 'string|nullable|max:20',
            'task5' => 'string|nullable|max:20',
            'task6' => 'string|nullable|max:20',
            'task7' => 'string|nullable|max:20',
            'task8' => 'string|nullable|max:20',
            'task9' => 'string|nullable|max:20',
        ];
    }
}
