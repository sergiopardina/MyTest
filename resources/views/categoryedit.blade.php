@extends('layouts.app')
@section('content')
    <h2>Category edit</h2>
    <form action="{{ route('category.update', $category->id) }}" method="POST" class="w3-container">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">
            @php
                $oldName = old('name');
            @endphp
            <label for="lot-name" class="col-sm-3 control-label">Lot name</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="lot-name" class="w3-input w3-border w3-round-large" value="{{ $oldName??$category->name }}">
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="w3-button w3-ripple w3-yellow">
                    <i class="fa fa-plus"></i> Save category
                </button>
            </div>
        </div>
    </form>
@endsection
