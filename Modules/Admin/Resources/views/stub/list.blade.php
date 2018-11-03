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
                        <input type="text" class="form-control mb-2 mr-sm-2" name="id" placeholder="ID" value="{{array_get($quering, 'department_id')}}">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Tên danh mục</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{array_get($quering, 'name')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Loại</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <select name="type" class="form-control">
                                <option value="">Chọn loại danh mục</option>
                                <option value="">Tin tức</option>
                                <option value="">Sản phẩm</option>
                                <option value="">Trang tĩnh</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mb-2"><i class="fa fa-search"></i> Tìm kiếm</button>
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
            <table class="table table-striped">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1,001</td>
                    <td>bootstrap</td>
                    <td>cards</td>
                    <td>grid</td>
                </tr>
                <tr>
                    <td>1,001</td>
                    <td>bootstrap</td>
                    <td>cards</td>
                    <td>grid</td>
                </tr>
                </tbody>
            </table>

            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>
@stop