<?php

namespace Modules\Shop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function getIndex(Request $request, $slug = [])
    {
        return view('shop::segments.index');
    }
}
