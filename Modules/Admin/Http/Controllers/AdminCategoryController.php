<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\CategoryRequest;
use Modules\Admin\Repositories\Category\CategoryRepositoryInterface as CategoryRepository;

class AdminCategoryController extends AdminBaseController
{
    protected $categoryRepository;
    protected $setting_global;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->setting_global = config('setting_global');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $this->setFilter($request, 'id');
        $this->setFilter($request, 'cat_name');
        $this->setFilter($request, 'cat_type');
        $filter = $this->getFilter();

        $sort = ['id', 'desc'];
        $listCategory = $this->categoryRepository->list($filter, $sort);
        $viewData = [
            'listCategory' => $listCategory,
            'settingGlobal' => $this->setting_global,
            'quering' => $request->query()
        ];
        return view('admin::category.list')->with($viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $fields = ['cat_name'];
        $viewData = [
            'category' => [],
            'settingGlobal' => $this->setting_global,
            'allListCategory' => $this->categoryRepository->getAllCategory($fields)
        ];
        return view('admin::category.add')->with($viewData);
    }

    public function store(CategoryRequest $request)
    {
        $dataForm = $request->except(['_token', 'redirect']);
        $dataForm['cat_order'] = (int)array_get($dataForm, 'cat_order');
        $dataForm['cat_new'] = array_get($dataForm, 'cat_new') ? 1 : 0;
        $dataForm['cat_hot'] = array_get($dataForm, 'cat_hot') ? 1 : 0;
        $dataForm['cat_seo'] = array_get($dataForm, 'cat_seo') ? 1 : 0;
        $dataForm['cat_active'] = array_get($dataForm, 'cat_active') ? 1 : 0;
        $dataForm['cat_slug'] = str_slug($dataForm['cat_name']);

        $categoryCreate = $this->categoryRepository->create($dataForm);
        // Cập nhật cate có cat_parent_id được chọn đã có has child
        if ($dataForm['cat_parent_id'] > 0) {
            $this->categoryRepository->updateCategoryHasChild($dataForm['cat_parent_id'], $categoryCreate->id);
        }
        set_flash("success", "Thêm mới thành công");
        return ($request->get('redirect') == 1)
            ? redirect()->back()
            : redirect()->route('categories.index');
    }

    public function edit($category_id)
    {
        $category = $this->categoryRepository->findOrFail($category_id);
        $fields = ['cat_name'];
        $viewData = [
            'category' => $category,
            'settingGlobal' => $this->setting_global,
            'allListCategory' => $this->categoryRepository->getAllCategory($fields)
        ];
        return view('admin::category.edit')->with($viewData);
    }

    public function update(CategoryRequest $request, $category_id)
    {
        $dataForm = $request->except(['_token', 'redirect']);
        $dataForm['cat_order'] = (int)array_get($dataForm, 'cat_order');
        $dataForm['cat_new'] = array_get($dataForm, 'cat_new') ? 1 : 0;
        $dataForm['cat_hot'] = array_get($dataForm, 'cat_hot') ? 1 : 0;
        $dataForm['cat_seo'] = array_get($dataForm, 'cat_seo') ? 1 : 0;
        $dataForm['cat_active'] = array_get($dataForm, 'cat_active') ? 1 : 0;
        $dataForm['cat_slug'] = str_slug($dataForm['cat_name']);

        $categorySelect = $this->categoryRepository->findById($category_id);
        // Check lại parent_id. Remove cate đó đi.
        if ($dataForm['cat_parent_id'] != $categorySelect->cat_parent_id) {
            $this->categoryRepository->updateCategoryHasChild($categorySelect->cat_parent_id, $category_id, 'remove');
            $this->categoryRepository->updateCategoryHasChild($dataForm['cat_parent_id'], $category_id);
        }
        $categorySelect->fill($dataForm);
        $categorySelect->save();
        set_flash("success", "Cập nhật thành công");
        return ($request->get('redirect') == 1)
            ? redirect()->back()
            : redirect()->route('categories.index');
    }

    public function updateCheckbox(Request $request)
    {
        $field = $request->get('field');
        $record_id = $request->get('record_id');
        $this->categoryRepository->updateByField($record_id, $field);
        return \response([
            'message' => 1,
        ]);
    }
}
