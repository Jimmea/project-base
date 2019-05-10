@extends('admin::layouts.master')
@section('title', "Thêm mới bài viết")
@section('content')
    @include('admin::blog.form', ['action'=> route('blogs.store')])
@stop