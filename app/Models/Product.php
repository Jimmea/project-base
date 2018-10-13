<?php

namespace App\Models;

use App\Repositories\FullTextSearch;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    use FullTextSearch;
    public $searchable = ['name','description'];

    // Defines product display options
    public static $mProductDisplayOptions = array (
        'Default', // 0
        'On Catalog', // 1
        'On Department', // 2
        'On Both'); // 3

    public function category()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id');
    }

    public function attributeValue()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_attribute', 'product_id', 'attribute_value_id');
    }

    /**
     * @param string $category_id
     * @return Product[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getProducts($params = [])
    {
        $category_id = array_get($params, 'category_id');
        $department_id = array_get($params, 'department_id');
        $search_string = array_get($params, 'search_string');

        $mproducts = self::with('category', 'attributeValue.attribute')
            ->whereHas('category', function($q) use ($category_id, $department_id) {
                // Where by category
                if ($category_id)
                {
                    $q->where('id', $category_id);
                }
                // where by department
                if ($department_id)
                {
                    $q->where('department_id', $department_id);
                }
            });


        if ($search_string)
        {
            $mproducts->search($search_string);
        }

        $products = $mproducts->paginate(5);

        return $products;
    }

    public static function getProductsOnCatalog()
    {
        return self::with('category', 'attributeValue.attribute')
                    ->where('display', 1)
                    ->orWhere('display', 3)
                    ->paginate(5);
    }

    public function deleteProduct()
    {
        // attribute
        // category
        // shopping_cart
        // product

    }
}
