@extends('layouts.app')
@section('content')
    <h2>Lots</h2>
    <a href="{{ route('lot.create') }}" class="btn btn-outline-warning"><i class="fa fa-plus"></i> Create new lot</a>
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
