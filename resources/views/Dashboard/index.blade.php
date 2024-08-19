@extends('layouts.base')
@section('content')   
{{Session::get('data')}}
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                   <h2 class = "text-center"> <i class="bi bi-receipt"></i> </h2>
                   <h4 class = " text-dark text-center fw-bold"> Invoices</h4>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                   <h2 class = "text-center"> <i class="bi bi-people-fill"></i></h2>
                   <h4 class = " text-dark text-center fw-bold"> Customers</h4>
                </div>
            
        </div>
    </div>

        <div class="col">
            
        </div>

        <div class="col">
            
        </div>
    </div>
</div>
















@endsection