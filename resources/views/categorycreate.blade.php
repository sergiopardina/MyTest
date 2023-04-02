@extends('layouts.app')
@section('content')
    <h2>New category</h2>
    <form action="{{ route('category.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="category-name" class="col-sm-3 control-label">Category name</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="category-name" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add category
                </button>
            </div>
        </div>
    </form>
@endsection

