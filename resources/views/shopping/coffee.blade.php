@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row"> 
        <div class="col">
            @foreach($data as $item)
            <div class="card mt-1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src = "{{$item->image}}" width = "200" height="200">

                        </div>
                        <div class="col-sm-6">
                            <h3 class = "alert alert-success">{{$item->title}} </h3>
                            <ul class = "list-unstyled">
                                <li class = "text-dark"> {{$item->description}}</li>
                                @foreach($item->ingredients as $row)
                                <li class = "text-dark"> {{$row}}</li> 
                                @endforeach()
                            </ul>
                        </div>                  
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection