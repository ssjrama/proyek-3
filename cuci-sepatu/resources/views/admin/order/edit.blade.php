@extends('layouts.admin')
@section('content')    
    <form action="/order/{{$order->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Pilihan Treatment</label>
            @foreach ($treatments as $t) 
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$t->id}}" name="treatment[]">
                <label class="form-check-label">
                    {{$t->name}}
                </label>
            </div>
            @endforeach
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" rows="5" class="form-control">{{$order->address}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection