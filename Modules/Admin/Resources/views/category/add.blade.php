@extends('admin::layouts.master')
@section('title', "Thêm mới danh mục")
@section('content')
    @include('admin::category.form', ['action'=> route('categories.store')])
@stop