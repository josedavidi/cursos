@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @include('navigation')
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb my-3">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contactos</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col">
                <h1 v-text="title"></h1>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    
    <script>
        const app = new Vue({
            data:{
                title:'Contactos'
            }
        })
    </script>
@endpush