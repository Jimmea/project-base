<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $fillable = ['tag_name', 'tag_md5', 'tag_status', 'tag_admin_id'];
}
