@extends('layouts.app')
@section('content')
    <h2>New lot</h2>
    <form action="{{ route('lot.store') }}" method="POST" class="w3-container">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="lot-name" class="col-sm-3 control-label">Lot name</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="lot-name" class="w3-input w3-border w3-round-large">
            </div>

            <label for="lot-description" class="col-sm-3 control-label">Lot description</label>
            <div class="col-sm-6">
                <input type="text" name="description" id="lot-description" class="w3-input w3-border w3-round-large">
            </div>
            <div class="col-sm-6">
                <span>Choose categories</span><br>
                @if (count($categories) > 0)
                    @foreach ($categories as $category)
                        <input type="checkbox" id="{{ $category->id }}" class="w3-check" name="categories[]" value="{{ $category->id }}">
                        <label for="{{ $category->id }}"> {{ $category->name }}</label><br>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No categories</td>
                    </tr>
                @endif
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="w3-button w3-ripple w3-yellow">
                    <i class="fa fa-plus"></i> Add lot
                </button>
            </div>
        </div>
    </form>
@endsection
