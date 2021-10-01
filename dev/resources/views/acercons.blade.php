@extends('layout')
@push('head')
    {{header('Access-Control-Allow-Origin: *')}}
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @include('navigation')
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb my-3">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Acercons</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
    <div class="container my-4" id="api">
        <div class="row">
            <div class="col-sm-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CATEGORIA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category['id_categoria']}}</td>
                                <td>{{$category['categoria']}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col">
                <h3 v-text="title"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Categoria</th>
                            <th>Producto</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{$producto['codigo_producto']}}</td>
                                <td>{{$producto['categoria']}}</td>
                                <td>{{$producto['nombre_producto']}}</td>
                                <td>{{$producto['precio']}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> --}}
    </div>
@endsection
@push('footer')
    
    <script>
        
        const app = new Vue({
            el:'#api',
            data:{
                title:'Lista de Productos'
            },
            created(){
                
            },
            methods:{
                getProducts(){
                    
                }
            }
        })
    </script>
@endpush