<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminBaseController extends Controller
{
    protected $filter = [];

    /**
     * Set mot vai thuoc tinh filter
     * @param $field
     * @param $ope
     * @param $defValue
     * @return
     */
    public function setFilter(Request $request, $field, $ope = '=', $defValue = null)
    {
        $value = ($defValue == null) ? $request->get($field) : $defValue;
        if ($value != '' || $value != null)
        {
            if (strtoupper($ope) == 'LIKE')
            {
                $value = '%' . trim($value) . '%';
            }
            $this->filter[] = [$field, $ope, trim($value)];
        }
    }

    /**
     * Get all filter
     * @return [type] [description]
     */
    public function getFilter()
    {
        return $this->filter;
    }
}
