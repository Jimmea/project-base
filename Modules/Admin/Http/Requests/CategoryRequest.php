<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 2/6/19
 * Time: 14:58
 */

namespace Modules\Admin\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
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
            'cat_name'             => 'required',
            'cat_type'             => 'required',
            'cat_meta_title'       => 'required',
            'cat_meta_keyword'     => 'required',
            'cat_meta_description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cat_type.required'                => trans('admin::form.messages.required'),
            'cat_name.required'                => trans('admin::form.messages.required'),
            'cat_meta_title.required'          => trans('admin::form.messages.required'),
            'cat_meta_keyword.required'        => trans('admin::form.messages.required'),
            'cat_meta_description.required'    => trans('admin::form.messages.required')
        ];
    }
}
