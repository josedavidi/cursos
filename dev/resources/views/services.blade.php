@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @include('navigation')
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb my-3">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col">
                <new-service></new-service>
            </div>
        </div>
    </div>
@endsection