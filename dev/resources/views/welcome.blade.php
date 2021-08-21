@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @include('navigation')
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb my-3">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                </ol>
              </nav>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col">
                <example-component></example-component>
            </div>
        </div>
    </div>
@endsection