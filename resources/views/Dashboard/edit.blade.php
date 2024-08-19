@extends('layouts.base')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body bg-white">
            <form action="{{route('update-prod')}}" method="post">
                @csrf 
                <div class="row mt-3 text-center">
                    <input type="hidden" name="id" value = "{{$product['id']}}"> 
                    <div class="col"> <label for="pname"> اسم المنتج </label> <input type="text" name="productName" class = "form-control p-1" id = "pname" value = "{{$product['productName']}}"> </div> 
                 </div>
                 <div class="row mt-3">
                    <div class="col text-center"> <button class = "btn btn-success" type = "submit"> Save</button></div>
                 </div>
            </form>
        </div>
    </div>
 </div>
@endsection