<template>
    <div class="card">
        <div class="card-body">
            <h3>{{titulo}}</h3>
            <br>
            <form @submit.prevent="agregar">
                <div class="mb-3">
                    <input v-model="service.name" placeholder="servicio" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <input v-model="service.price" placeholder="precio" type="text" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <button class="btn btn-success">Guardar</button>
                </div>
            </form>
            <hr>
            <ul class="list-group">
                <li class="list-group-item" v-for="(service, index) in services">
                    <div class="d-flex">
                        <div class="me-auto p-2 bd-highlight">
                            <a :href="'service/'+service.id">
                                <span :class="[service.status == true ? 'text-primary':'text-danger']">
                                    {{service.name}} ${{service.price}}
                                    <br>
                                    <small>{{service.updated_at|myDate}}</small>
                                </span>
                            </a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <button class="btn btn-success btn-sm" @click="editarStatus(index, service.id)"><i class="fas fa-check"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    
    // import toastr from 'toastr'
    
    export default{
        data(){
            return {
                titulo:'Registrar Servicios',
                services: [],
                service: {
                    name:'',
                    price:''
                }
            }
        },
        created(){

            axios.get('services-all')
                    .then(res=>{
                      this.services = res.data
                    })
        },
        methods: {

            
            agregar(){
                const params = {
                    name:this.service.name,
                    price:this.service.price
                }

                this.service.name = "";
                this.service.price = "";

                axios.post('storeService',params)
                    .then((res) => {
                        this.services.push(res.data)
                        toastr.success('Datos Ingresados')
                    }).catch(error => {
                        toastr.error('Error en el Servidor')
                    });
            
               
            },
            editarStatus(index, id){
                axios.put('editStatus/'+id)
                        .then(res=>{
                            axios.get('services-all')
                                    .then(res =>{
                                        this.services = res.data
                                    })
                                    .catch(error => {
                                        toastr.error('error al cargar los servicios');
                                    })
                            

                            toastr.warning('El estado ha sido modificado');
                        })
                        .catch(error=>{
                            
                        })
            }
            
        },
       
    }
</script>

