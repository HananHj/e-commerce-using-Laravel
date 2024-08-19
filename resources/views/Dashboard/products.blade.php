@extends('layouts.base')
@section('content')   

<div class="container">
    <div class="row mt-5">
        <div class="col">
         <!-- Button trigger modal -->
         {{Session::get('data')}}

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <!-- نفس اي دي المودال اللي تحت -->
    Add new product
  </button>
  
  <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add new product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action = "{{route('addProduct')}}" method="post">
            @csrf
            <input type = "text" class ="form-control" name = "productName">
            <button type = "submit" class = "btn btn-info mt-5"> Save </button> 
            <button type="button" class="btn btn-secondary mt-5 " data-bs-dismiss="modal">Close</button>


          </form>
        </div>

      </div>
    </div>
  </div>


    </div>
</div>
<div class="row mt-5">
  <div class="col">
    <form action="{{route('search')}}" method = "post">
      @csrf
      <input type="text" name="name" class = "from-control">
      <button type = "submit" class = "btn btn-success"> search </button> 

    </form>
  </div>

</div>
<div class="row mt-5">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <table class = "table table-bordered">
          <thead>
            <th>ID</th>
            <th>Product Name</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody class = "text-center">
            @foreach($products as $item)
            <tr> 
              <td>{{$item->id}}</td>
              <td>{{$item->productName}}</td> 
              <td> <a href = "{{route('deleteProduct',['id'=>$item['id']])}}"> <i class="fa fa-trash text-danger" aria-hidden="true"></i> </a> </td>  <!-- الباراميتر هو الاي دي اللي من الرو يعني شيل معاك الاي دي اللي يضغط عليها المتسخدم -->
              <td><a href="{{route('editProduct',['id'=>$item['id']])}}"><i class="fa fa-edit text-success" aria-hidden="true"></i></a></td>
            </tr>
            @endforeach
          </tbody> 
        </table>

      </div>
    </div>
  </div>
</div>
</div>

@endsection