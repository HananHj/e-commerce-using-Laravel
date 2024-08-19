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
                            <img src = "\assests\image\{{$item->image}}" width = "200" height="200">

                        </div>
                        <div class="col-sm-6">
                            <h3 class = "alert alert-success">{{$item->productName}} </h3>
                            <ul class = "list-unstyled">
                                <li class = "badge bg-danger p-2"> {{$item->description}}</li>
                                <li class = "p-2"><h4> {{$item->color}}</h4</li>
                                <li style="font-size:small"> Jeddah , Alnaeem street</li>   
                            </ul>

                        </div>
                        <div class="col-sm-3">
                            <ul class = "list-unstyled p-2">
                                <li class = "badge bg-success" style="font-size: medium">price: {{$item->price}} SR</li>
                                <li class = ""><span>Tax : {{$item->tax}}  </span></li>
                                <li class = ""> <small>Total {{$item->total}} SR </small></li>
                                <li class = ""> <small>Discount : <del> 10 SR</del> </small></li>
                                <li class = ""> <small>Net: {{$item->Net}} SR </small></li>                        
                            </ul>
                            <div class="row">
                                <div class="col">
                                    <a href="/shopping/showDetails/{{$item->id}}" class="btn btn-info">Show Details</a><!-- ما يحتاج نحط هدن انبوت لانها جت مو بوست -->
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>






@endsection