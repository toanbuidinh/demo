<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTaskRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'start' => 'required',
            'end' => 'required',
            'color' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Bạn cần nhập tên vào',
            'content.required' => 'Bạn cần nhập ghi chú vào',
            //'start.before' => 'Bạn cần nhập thời gian bắt đầu trước thời gian kết thúc',
            'start.required' => 'Bạn cần nhập thời gian bắt đầu vào',
            // 'end.after' => 'Bạn cần nhập thời gian kết thúc sau thời gian bắt đầu',
            'end.required' => 'Bạn cần nhập thời gian kết thúc vào',
            'color.required' => 'Bạn cần nhập màu vào'
        ];
    }
}
