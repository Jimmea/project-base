<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 2/6/19
 * Time: 15:02
 */

/**
 * Created by : BillJanny
 * Date: 17:50 - 27/01/17
 * Tao mot chuoi has-error neu co loi
 * @param array $errors  : Mang loi
 * @param  string $field : truong field_name
 * @return string
 */
if (! function_exists('has_error'))
{
    function has_error($errors, $field)
    {
        $field = str_replace(array('[', ']'), '', $field);
        return isset($errors) && $errors->has($field) ? 'is-invalid' : '';
    }
}

/**
 * Created by : BillJanny
 * Date: 18:17 - 27/01/17
 * Xuat thong tin loi neu co
 * @param array $errors  : Mang loi
 * @param  string $field : truong field_name
 * @return string
 */
if (! function_exists('get_error'))
{
    function get_error($errors, $field)
    {
        $field = str_replace(array('[', ']'), '', $field);
        $helpBlock  = (isset($errors) && $errors) ? '<span class="help-block color_red">'.$errors->first($field).'</span>' : '';

        return $helpBlock;
    }
}

/**
 * Created by : BillJanny
 * Date: 18:17 - 27/01/17
 * giu data trong form
 * @param  string $field : truong du lieu
 * @param  array $dataform : mang du lieu
 * @return string
 */
if (! function_exists('get_value_field'))
{
    function get_value_field($field, $data = [], $default='')
    {
        $field = str_replace(array('[', ']'), '', $field);
        $value = old($field, $data->$field ?? $default);

        return $value;
    }
}