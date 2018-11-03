<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $fillable = ['department_id', 'name'];
    public $type_array = [
        'Tin tức',
        'Sản phẩm',
        'Trang tĩnh',
        'Hỏi đáp'
    ];

}
