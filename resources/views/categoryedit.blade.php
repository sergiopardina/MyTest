@extends('layouts.app')
@section('content')
    <h2>Category edit</h2>
    <form action="{{ route('category.update', $category->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">
            @php
                $oldName = old('name');
            @endphp
            <label for="lot-name" class="col-sm-3 control-label">Lot name</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="lot-name" class="form-control" value="{{ $oldName??$category->name }}">
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Save category
                </button>
            </div>
        </div>
    </form>
@endsection
