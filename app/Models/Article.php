<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $fillable = ['art_name','art_slug','art_picture', 'art_cat_id', 'art_status', 'art_seo', 'art_hot', 'art_description_short', 'art_full_path', 'art_full_path_link', 'art_author_id', 'art_admin_id'];
}
