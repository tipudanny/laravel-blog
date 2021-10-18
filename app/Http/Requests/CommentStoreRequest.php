<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CommentStoreRequest extends FormRequest
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
    protected function prepareForValidation($post)
    {
        return[
            'user_id' => Auth::id(),
            'post_id' => $this->route($post->id)
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required',
            'user_id' => 'required | exit:users,id||||',
            'post_id'=>  'required | exit:posts,id',
        ];
    }
}
