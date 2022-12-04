@extends('layout')

@section('body')
    <div class="cont">
    
        <a href="{{ route('admin.add') }}">New Food</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Order</th>
                </tr>
            </thead>
            <tbody>
                @forelse($foods as $food)
                    <tr>

                        <th scope="row">
                            <span>{{ $food->name }}</span>
                        </th>
                        <td>{{ $food->category }}</td>
                        <td>{{ $food->order }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.edit', ['id' => $food->id]) }}">
                                Edit
                            </a>
                            <a class="btn btn-danger" href="{{ route('admin.delete', ['id' => $food->id]) }}">
                                Delete
                            </a>
                        </td>
                    </tr>
                @empty
                    <p>No Food found.</p>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
