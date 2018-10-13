@extends('admin::layouts.master')
@section('title', "List Attribute")
@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <form class="form-inline">
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="name" class="form-control" placeholder="[name]" aria-describedby="helpId">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
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