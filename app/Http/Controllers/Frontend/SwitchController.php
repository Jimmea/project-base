<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/23/18
 * Time: 11:13 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Shop\Http\Controllers\CategoryController;
use Modules\Shop\Http\Controllers\SegmentController;

class SwitchController extends Controller
{
    public function anyview(Request $request, $slug = '')
    {
        $slugArr = explode('/', $slug);
        $lengthSegment = count($slugArr);
        switch ($lengthSegment)
        {
            case 1:
                $c = new SegmentController();
                $template = $c->getIndex($request, $slugArr);
                break;

            case 2:
                $c = new CategoryController();
                $template = $c->getIndex($request, $slugArr);
                break;

            case 3:

                break;

            default:
                $template = view('shop::home');
        }
        return $template;
    }
}