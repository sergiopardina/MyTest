@extends('layouts.app')
@section('content')
    <h2>Lot edit</h2>
    <form action="{{ route('lot.update', $lot->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">
            @php
                $oldName = old('name');
                $oldDescription = old('description');
            @endphp
            <label for="lot-name" class="col-sm-3 control-label">Lot name</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="lot-name" class="form-control" value="{{ $oldName??$lot->name }}">
            </div>

            <label for="lot-description" class="col-sm-3 control-label">Lot description</label>
            <div class="col-sm-6">
                <input type="text" name="description" id="lot-description" class="form-control" value="{{ $oldDescription??$lot->description }}">
            </div>
            <div class="col-sm-6">
                <span>Choose categories</span><br>
                @if (count($categories) > 0)
                    @foreach ($categories as $category)
                        <input type="checkbox" id="{{ $category->id }}" name="categories[]" value="{{ $category->id }}">
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
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Save lot
                </button>
            </div>
        </div>
    </form>
@endsection
