@extends('layouts.app')
@section('content')
    <h2>Lots</h2>
    <a href="{{ route('lot.create') }}" class="btn btn-outline-warning"><i class="fa fa-plus"></i> Create new lot</a>
    <div>
        <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-outline-warning"><i class="fa fa-bars"></i> Filters</button>
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-padding-16">
                <div class="w3-container">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h3>Categories</h3>
                    <form action="{{ route('lot.store') }}" method="POST" class="w3-container">
                        {{ csrf_field() }}

                        <div class="form-group">
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
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="w3-button w3-ripple w3-yellow">
                                    <i class="fa fa-plus"></i> Use filters
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped task-table">
        <thead>
        <tr>
            <th>Lot name</th>
            <th>Description</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @if (count($lots) > 0)
            @foreach ($lots as $lot)
                <tr>
                    <td class="table-text">
                        <div>{{ $lot->name }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $lot->description }}</div>
                    </td>
                    <td>
                        <form action="{{ route('lot.destroy', $lot->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-outline-danger">
                                <i class="fa fa-btn fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('lot.edit', $lot->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('GET') }}

                            <button type="submit" class="btn btn-outline-warning">
                                <i class="fa fa-btn fa-edit"></i> Edit
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">No lots</td>
            </tr>
    @endif
@endsection
