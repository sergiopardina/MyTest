@extends('layouts.app')
@section('content')
    <h2>New category</h2>
    @include('common.errors')
    <form action="{{ route('category.store') }}" method="POST" class="w3-container">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="category-name" class="col-sm-3 control-label">Category name</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="category-name" class="w3-input w3-border w3-round-large">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="w3-button w3-ripple w3-yellow">
                    <i class="fa fa-plus"></i> Add category
                </button>
            </div>
        </div>
    </form>
@endsection

