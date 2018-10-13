<?php

namespace Modules\Admin\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Repositories\Department\DepartmentRepositoryInterface as DepartmentRepository;
use Modules\Admin\Repositories\Category\CategoryRepositoryInterface as CategoryRepository;
use Illuminate\Support\Facades\Session;

class AdminDepartmentController extends AdminBaseController
{
    protected $departmentRepository;
    protected $categoryRepository;

    public function __construct(
                    DepartmentRepository $departmentRepository,
                    CategoryRepository $categoryRepository
                    )
    {
        $this->departmentRepository = $departmentRepository;
        $this->categoryRepository   = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $this->setFilter($request, 'department_id');
        $this->setFilter($request, 'name', 'LIKE');
        $filters = $this->getFilter();
        $sort = ['department_id', 'DESC'];

        $listDepartment = $this->departmentRepository->list($filters, $sort);

        $viewData = [
            'listDepartment' => $listDepartment,
            'quering'=> $request->query()
        ];
        return view('admin::department.list')->with($viewData);
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if ($data)
        {
            $this->departmentRepository->create($data);
        }

        Session::flash('success', 'Add department successfully');
        return redirect()->route('departments.index');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($department_id)
    {
        $filter = ['department_id', '=', $department_id];
        $department = $this->categoryRepository->findOneBy($filter);
        if (!$department)
        {
            $this->departmentRepository->destroy($department_id);
            Session::flash('success', 'Delete successfuly derpartment');
        }else
        {
            Session::flash('warning', "You can't delete this department.");
        }
        return redirect()->back();
    }
}
