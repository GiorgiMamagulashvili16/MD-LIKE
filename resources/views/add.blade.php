@extends('layout')

@section('body')
    <form method="post" action="">
        @csrf
        <div class="mb-3">
            <label class="form-label">FoodName</label>
            <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Order</label>
            <input type="text" name="order" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
