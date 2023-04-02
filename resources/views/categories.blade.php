@extends('layouts.app')
@section('content')
    <h2 class="align-content-lg-center">Categories</h2>
    <a href="{{ route('category.create') }}" class="btn btn-outline-warning"><i class="fa fa-plus"></i> Create new category</a>
    <table class="table table-striped task-table">
        <thead>
        <tr>
            <th>Category name</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @if (count($categories) > 0)
            @foreach ($categories as $category)
                <tr>
                    <td class="table-text">
                        <div>{{ $category->name }}</div>
                    </td>
                    <td>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-outline-danger">
                                <i class="fa fa-btn fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('category.edit', $category->id) }}" method="POST">
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
                <td colspan="4">No categories</td>
            </tr>
    @endif
@endsection
