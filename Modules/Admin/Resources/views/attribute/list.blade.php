@extends('admin::layouts.master')
@section('title', "DANH SÁCH THUỘC TÍNH")
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
                        <th width="5%">#</th>
                        <th width="60%">Name</th>
                        <th width="20%">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($attributes as $item)
                        <tr>
                            <td>{{ $item->attribute_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('attributes_value.index', ['attribute_id'=> $item->attribute_id]) }}" class="btn btn-outline-dark btn-sm">Edit attribute value</a>
                                <a href="{{ route('attributes_value.edit', $item->attribute_id) }}" class="btn btn-outline-dark btn-sm">Edit</a>
                                <a href="{{ route('attributes_value.destroy', $item->attribute_id) }}" class="btn btn-outline-dark btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $attributes->appends($quering)->render() }}

            </div>
        </div>
    </div>
@stop