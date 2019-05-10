<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesMulti extends Model
{
    protected $table = 'categories_multis';
    public $fillable = ['cat_name', 'cat_slug','cat_picture', 'cat_icon', 'cat_parent_id','cat_has_child','cat_all_child',
        'cat_active', 'cat_order', 'cat_type', 'cat_full_path','cat_full_path_link','cat_seo', 'cat_hot', 'cat_new',
        'cat_meta_title','cat_meta_description','cat_meta_keyword','cat_special', 'cat_promotion', 'cat_show_in_teaser',
        'cat_themes', 'cat_show_in_search', 'cat_show_in_list', 'cat_show_in_list_full', 'cat_show_in_tab', 'cat_show_other_product'];
}
