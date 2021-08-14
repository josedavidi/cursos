@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Services</h1>
                <a href="{{route('home')}}">Home</a>
                <h6>Hello, </h6>
                <p>This ares my services: </p>
                <ul>
                    @foreach ($my_services as $item)
                    <li>{{$item->name}}</li>
                    @endforeach
                </ul>
                <hr>
                <form action="#" method="POST">
                    <div class="form-group my-3">
                        <input type="text" placeholder="names" name="names" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <input type="tel" placeholder="dni" name="dni" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <input type="email" placeholder="email" name="email" class="form-control">
                    </div>
                    <div class="form-group my-3 d-grid">
                        <button class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection