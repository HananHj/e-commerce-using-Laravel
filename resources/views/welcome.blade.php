@extends('layouts.app')

@section('content')

<style>
    

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        background-color: #4b7bec; /* Blue background for all cards */
        color: #fff; /* Text color set to white */
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-body {
        padding: 20px;
        text-align: center;
    }

    .card-body h6 {
        margin-top: 10px;
        font-size: 18px;
    }

    .bi {
        font-size: 60px;
    }
</style>

<div class="container">
    <div class="row text-center d-flex justify-content-center mt-5">
        <div class="col-lg-3 col-md-6 mb-4">
            <a href="{{route('showListItemPhones')}}" style="text-decoration:none;">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-phone"></i>
                        <h6>Smart Phones</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <i class="bi bi-house-door"></i>
                    <h6>Home Appliance</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center d-flex justify-content-center mt-5">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <i class="bi bi-lightning"></i>
                    <h6>Electronic Devices</h6>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <i class="bi bi-bucket"></i>
                    <h6>Cleaning Supplies</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

@endsection
