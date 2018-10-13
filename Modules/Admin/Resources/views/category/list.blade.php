@extends('admin::layouts.master')
@section('title', "List Category")
@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <h4>Add new category</h4>
            @include('admin::partials.message')
            <form class="form-inline" method="POST" action="{{ route('categories.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Name</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" name="name" id="inlineFormInputGroupUsername2" placeholder="[Name]">
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Description</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" name="description" id="inlineFormInputGroupUsername2" placeholder="[Description]">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Create</button>
            </form>

            <h4>Filter and Search</h4>
            <form class="form-inline" action="{{ route('categories.index') }}">
                <label class="sr-only" for="inlineFormInputName2">ID</label>
                <input type="text" class="form-control mb-2 mr-sm-2" name="id" placeholder="ID" value="{{array_get($quering, 'department_id')}}">

                <label class="sr-only" for="inlineFormInputGroupUsername2">Name</label>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{array_get($quering, 'name')}}">
                </div>
                <button type="submit" class="btn btn-success mb-2"><i class="fa fa-search"></i> Filter</button>
            </form>


        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                    <tr>
                        <th width="5%">#</th>
                        <th width="20%">Name</th>
                        <th>Description</th>
                        <th width="10%">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listCategory as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="" class="mt-1 btn btn-outline-secondary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                <form method="post" action="{{ route('departments.destroy', $item->department_id) }}">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="mt-1 btn btn-outline-secondary btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                                </form>

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