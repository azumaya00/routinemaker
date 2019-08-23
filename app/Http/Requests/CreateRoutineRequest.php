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

    public function messages() {
        return [
            'title.required' => 'タイトルは必須です',
            'task0.required' => 'タスク1は必須です',
            'title.max' => 'タイトルは20文字以内で記入して下さい',
            'task0.max' => 'タスク1は20文字以内で記入して下さい',
            'task1.max' => 'タスク2は20文字以内で記入して下さい',
            'task2.max' => 'タスク3は20文字以内で記入して下さい',
            'task3.max' => 'タスク4は20文字以内で記入して下さい',
            'task4.max' => 'タスク5は20文字以内で記入して下さい',
            'task5.max' => 'タスク6は20文字以内で記入して下さい',
            'task6.max' => 'タスク7は20文字以内で記入して下さい',
            'task7.max' => 'タスク8は20文字以内で記入して下さい',
            'task8.max' => 'タスク9は20文字以内で記入して下さい',
            'task9.max' => 'タスク10は20文字以内で記入して下さい',
        ];
    }
}
