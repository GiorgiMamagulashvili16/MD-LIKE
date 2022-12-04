@extends('layout')

@section('body')
    <form method="post" action="">
        @csrf
        <div class="mb-3">
            <label class="form-label">FoodName</label>
            <input type="text" name="editname" class="form-control" aria-describedby="emailHelp" value="{{$food->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="editcategory" class="form-control" aria-describedby="emailHelp" value="{{$food->category}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Order</label>
            <input type="text" name="editorder" class="form-control" value="{{$food->order}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
