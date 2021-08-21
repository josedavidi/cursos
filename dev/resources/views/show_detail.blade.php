@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @include('navigation')
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb my-3">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Detalles del servicio</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
    <div class="container my-4" id="app">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" id="idService" value="3">
                        <h1 class="card-title">@{{title}}</h1>
                        <hr>
                        <h3 class="card-title">Categoría: @{{service.name}}</h3>
                        <h3 class="card-title">Precio: @{{service.price}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" id="idService" value="3">
                        <h1 class="card-title">Consultar otro Servicio @{{item}}</h1>
                        <hr>
                        <select @change="ShowPrice" v-model="item" name="" class="form-select">
                            <option value="">Seleccionar</option>
                            <option value="1">Web Developer</option>
                            <option value="2">Marketing Digital</option>
                            <option value="3">Graphic Design</option>
                            <option value="4">Teacher</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    <script>
        const app = new Vue({
            el:'#app',
            data:{
               title:'Detalles del servicio',
               service:{
                   name:'',
                   price:''
               },
               item:''
           },

           created(){
            this.showService();
           },

           methods: {
               showService(){
                   const idService = document.getElementById('idService').value;

                   axios.get('../../service-detail/'+idService)
                        .then(res=>{
                            this.service = res.data;
                        })
                        .catch(error=>{
                            toast.danger('Error en el servidor');
                        })
               },
               ShowPrice(){
                    axios.get('../../service-detail/'+this.item)
                    .then(res=>{
                            this.service = res.data;
                        })
                        .catch(error=>{
                            console.log('Error en el servidor');
                        })
               }
           },
        })
    </script>
@endpush