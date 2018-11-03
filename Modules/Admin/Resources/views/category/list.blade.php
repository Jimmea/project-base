@extends('admin::layouts.master')
@section('title', "Danh sách danh mục")
@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            {{--<h4>Add new category</h4>--}}
            {{--@include('admin::partials.message')--}}
            {{--<form class="form-inline" method="POST" action="{{ route('categories.store') }}">--}}
                {{--{{ csrf_field() }}--}}
                {{--<div class="form-group">--}}
                    {{--<label class="sr-only" for="inlineFormInputGroupUsername2">Name</label>--}}
                    {{--<div class="input-group mb-2 mr-sm-2">--}}
                        {{--<input type="text" class="form-control" name="name" id="inlineFormInputGroupUsername2" placeholder="[Name]">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label class="sr-only" for="inlineFormInputGroupUsername2">Description</label>--}}
                    {{--<div class="input-group mb-2 mr-sm-2">--}}
                        {{--<input type="text" class="form-control" name="description" id="inlineFormInputGroupUsername2" placeholder="[Description]">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Create</button>--}}
            {{--</form>--}}

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
                        <th width="5%">#</th>
                        <th width="20%">Name</th>
                        <th width="20%">Type</th>
                        <th>Order</th>
                        <th>Active</th>
                        <th width="10%">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listCategory as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->order }}</td>
                            <td>{{ $item->active }}</td>
                            <td>
                                <a href="" class="mt-1 btn btn-outline-secondary btn-sm"><i class="fa fa-edit"></i> Sửa</a>
                                <a href="" class="mt-1 btn btn-outline-secondary btn-sm"><i class="fa fa-edit"></i> Xoá</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $listCategory->appends($quering)->render() }}
            </div>
        </div>
    </div>
@stop