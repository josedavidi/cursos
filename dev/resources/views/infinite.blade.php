@extends('layout')
@push('head')
	<style type="text/css">
		.my-active span{
			background-color: #5cb85c !important;
			color: white !important;
			border-color: #5cb85c !important;
		}
	</style>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
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
                <h3>Infinite Loading</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                @forelse ($posts as $post)
                <div class="card my-3" v-for="post of posts">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->id}}) {{$post->title}}</h5>
                        <p class="card-text">{{$post->description}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                @empty
                    <small class="text-danger">No hay entradas</small>
                @endforelse
                <hr>
                <div>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    
    <script>
        
        import infiniteScroll from "vue-infinite-scroll";
 Vue.use(infiniteScroll);
 
        var count = 0;
        
        const app = new Vue({
            
            el:'#api',
            data:{
                title:'Lista de Productos',
                posts:[],
                page:0,
                busy: false
                
            },
            
            methods:{
                
                loadMore: function() {
                this.busy = true;

                setTimeout(() => {
                    for (var i = 0, j = 10; i < j; i++) {
                    this.data.push({ name: count++ });
                    }
                    this.busy = false;
                }, 1000);
                }
            }
        })
    </script>
@endpush