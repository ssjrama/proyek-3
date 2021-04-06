@extends('layouts.admin')
@section('content')    
    <form action="/treatment/{{$treatment->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Nama Treatment</label>
            <input type="text" name="name" class="form-control" value="{{$treatment->name}}">
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" class="form-control" value="{{$treatment->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection