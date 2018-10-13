<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\Product;
use Illuminate\Http\Request;
define('FT_MIN_WORD_LEN', 4);

class CataLogController extends Controller
{
    public function getList(Request $request)
    {
        $department_id = $request->department_id;
        $category_id =  $request->category_id;
        $searchString = $request->get('search');


        $departments = Department::all();
        $categories = Category::whereRaw('1=1');
        if ($department_id)
        {
            $categories->where('department_id', $department_id);
        }

        $categories = $categories->get();


        // Tìm danh mục
        if ($categories)
        {
            foreach ($categories as &$category)
            {
                $url = [];
                $url[] = 'department_id='.$department_id;
                $url[] = 'category_id='. $category->id;
                $url = implode('&', $url);
                $category->setAttribute('link', $url);
            }
        }

        // Build search string from accept word
        $search_string  = $this->search($searchString);

        $params = [
          'search_string' => $search_string,
          'category_id'=> $category_id,
          'department_id' => $department_id
        ];

        // Tìm sản phẩm
        if ($category_id || $department_id || $search_string)
        {
            $products = Product::getProducts($params);
        }else
        {
            $products = Product::getProductsOnCatalog();
        }

        $viewData = [
            'departments' => $departments,
            'categories' => $categories,
            'products' => $products,
            'quering' => $request->query()
        ];

        return view('store_front')->with($viewData);
    }


    public function search($searchString,  $allWords= '')
    {
        if (!$searchString) return '';

        // Search string delimiters
        $delimiters = ',.; ';
        $word = strtok($searchString, $delimiters);

        // Parse the string word by word until there are no more words
        while ($word)
        {
            // Short words are added to the ignored_words list from $search_result
            if (strlen($word) < FT_MIN_WORD_LEN)
                $search_result['ignored_words'][] = $word;
            else
                $search_result['accepted_words'][] = $word;

            // Get the next word of the search string
            $word = strtok($delimiters);
        }

        // If there aren't any accepted words return the $search_result
        if (count(array_get($search_result, 'accepted_words')) == 0) return '';

        // Build $search_string from accepted words list
        $search_string = '';

        // If $allWords is 'on' then we append a ' +' to each word
        if (strcmp($allWords, "on") == 0)
            $search_string = implode(" +", $search_result['accepted_words']);
        else
            $search_string = implode(" ", $search_result['accepted_words']);

        return $search_string;
    }
}
