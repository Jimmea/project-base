@extends('admin::layouts.master')
@section('title', "Danh sách danh mục")
@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="box-header">
                <div class="box-header-search pull-left">
                    <form class="form-inline" action="{{ route('categories.index') }}">
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputName2">ID</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" name="id" placeholder="ID" value="{{array_get($quering, 'id')}}">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroupUsername2">Tên danh mục</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control" name="cat_name" placeholder="Name" value="{{array_get($quering, 'cat_name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroupUsername2">Loại</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <select name="cat_type" class="form-control">
                                    <option value="">Loại danh mục</option>
                                    @foreach($settingGlobal['category_type'] as $key => $name)
                                        <option {{ array_get($quering, 'cat_type') == $key ? 'selected=selected' : ''}} value="{{ $key }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark mb-2"><i class="fa fa-search"></i> Tìm kiếm</button> &nbsp;
                        <button type="reset" class="btn btn-success mb-2"><i class="fa fa-search"></i> Làm mới</button>
                    </form>
                </div>
                <div class="box-header-action pull-right">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm mới</a>
                    <a href="" class="btn btn-info">Xuất Excel</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-inverse">
                    <tr>
                        <th width="5%">#</th>
                        <th width="20%">NAME</th>
                        <th width="10%">HAS CHILD</th>
                        <th width="5%%">TYPE</th>
                        <th width="5%%">NEW</th>
                        <th width="5%%">HOT</th>
                        <th width="5%">ACTIVE</th>
                        <th width="5%">ORDER</th>
                        <th width="10%" class="text-center">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listCategory as $item)
                        <tr data-id="{{ $item->id }}">
                            <td align="center">{{ $item->id }}</td>
                            <td>{{ $item->cat_name }}</td>
                            <td align="center">{{ $item->cat_has_child }}</td>
                            <td>{{ strtolower($item->cat_type) }}</td>
                            <td align="center">
                                <input type="checkbox" class="click_checkbox" name="cat_new" {{ $item->cat_new ? 'checked=checked' : '' }}>
                            </td>
                            <td align="center">
                                <input type="checkbox" class="click_checkbox" name="cat_hot" {{ $item->cat_hot ? 'checked=checked' : '' }}>
                            </td>
                            <td align="center">
                                <input type="checkbox" class="click_checkbox" name="cat_active" {{ $item->cat_active ? 'checked=checked' : '' }}>
                            </td>
                            <td align="center">{{ $item->cat_order }}</td>
                            <td align="center">
                                <a href="{{ route('categories.edit', $item->id) }}" class="mt-1 btn btn-outline-dark btn-sm"><i class="fa fa-edit"></i> Sửa</a>
                                <a href="" class="mt-1 btn btn-outline-dark btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xoá')"><i class="fa fa-edit"></i> Xoá</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="paginate">
                    <div class="pagination-left float-left">
                       Hiển thị {{ $listCategory->firstItem() . '- ' .$listCategory->lastItem() . ' / '. $listCategory->total() }} bản ghi
                    </div>
                    <div class="pagination-right float-right">
                        {{ $listCategory->appends($quering)->render() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        var UPDATE_CHECKED = '{{ route('post.admin_categories.update_checkbox') }}';
        function updateCheckBox(element)
        {
            $(element).click(function ()
            {
                let field     = $(this).attr('name');
                let record_id = $(this).closest('tr').attr('data-id');
                $.ajax({
                    url: UPDATE_CHECKED,
                    type: 'POST',
                    dataType: 'json',
                    data: {field:field, record_id:record_id},
                })
                .done(function (response) {
                    console.log(response);
                })
                .fail(function () {
                    console.log("error");
                })
                .always(function () {
                    console.log("complete");
                });
            })
        }

        $(function () {
            updateCheckBox('.click_checkbox');
        })
    </script>
@stop