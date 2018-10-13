@extends('admin::layouts.master')
@section('title', " Edit Attribute Values ")
@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <h5>Add new attribute value</h5>
            <form class="form-inline">
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="name" class="form-control" placeholder="[name]" aria-describedby="helpId">
                    <button type="submit" class="btn btn-success">Add</button>
                    <a href="{{ route('attributes.index') }}"> [Back to attribute ...]</a>
                </div>
            </form>
            <br>
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
                    @foreach($attribute_value as $item)
                        <tr>
                            <td>{{ $item->attribute_value_id }}</td>
                            <td>{{ $item->value }}</td>
                            <td>
                                <a href="{{ route('attributes_value.edit', $item->attribute_value_id) }}" class="btn btn-outline-dark btn-sm">Edit</a>
                                <a href="{{ route('attributes_value.destroy', $item->attribute_value_id) }}" class="btn btn-outline-dark btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $attribute_value->appends($quering)->render() }}

            </div>
        </div>
    </div>
@stop