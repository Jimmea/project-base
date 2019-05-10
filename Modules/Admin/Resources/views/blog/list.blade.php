@extends('admin::layouts.master')
@section('title', "Danh sách bài viết")
@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="box-header">
                <div class="box-header-search pull-left">
                    <form class="form-inline" action="{{ route('blogs.index') }}">
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputName2">ID</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" name="id" placeholder="ID"
                                   value="{{array_get($quering, 'id')}}">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroupUsername2">Tên danh mục</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control" name="art_name" placeholder="Name"
                                       value="{{array_get($quering, 'art_name')}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mb-2"><i class="fa fa-search"></i> Tìm kiếm
                        </button>
                    </form>
                </div>

                <div class="box-header-action pull-right">
                    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Thêm mới</a>
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

            </div>
        </div>
    </div>
@stop