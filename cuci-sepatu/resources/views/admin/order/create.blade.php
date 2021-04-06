@extends('layouts.admin')
@section('content')    
    <form action="/order" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Pilihan Treatment</label>
            @foreach ($treatments as $t) 
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$t->id}}" name="treatments[]">
                <label class="form-check-label">
                    {{$t->name}}
                </label>
            </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection