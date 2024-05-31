<?php

namespace App\Http\Requests\Tutor;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'learning_objectives' => 'required|array',
            'learning_objectives.*' => 'string',
            'prerequisites' => 'required|array',
            'prerequisites.*' => 'string',
            'target_audiences' => 'required|array',
            'target_audiences.*' => 'string',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'promotional_video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000',
            'price' => 'required|numeric|min:0',
            'is_free' => 'nullable|boolean',
            'welcome_message' => 'nullable|string',
            'completion_message' => 'nullable|string',
            'primary_language' => 'required|string|max:255'
        ];
    }
}
