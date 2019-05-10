@extends('admin::layouts.master')
@section('title', "Cập nhật danh mục")
@section('content')
    @include('admin::category.form', ['action'=> route('categories.update', $category->id)])
@stop