@extends('admin::layouts.master')
@section('title', "Cập nhật bài viết")
@section('content')
    @include('admin::blogs.form', ['action'=> route('blogs.update', $articles->id)])
@stop