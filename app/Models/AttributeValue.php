<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $table = 'attribute_value';
    protected $primaryKey = 'attribute_value_id';

    public $fillable = ['attribute_id', 'value'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id', 'attribute_id');
    }
}
