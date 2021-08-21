<template>
    <div>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{data.name}}</h3>
                <h2>Precio: ${{data.price}}</h2>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            data:{
                name:'',
                price:''
            }
        }
    },
    created(){
        axios.get('http://localhost:8181/service-detail/'+3)
            .then(res=>{
                this.data = res.data;
            })
            .catch(error=>{
                
                toastr.warning('Error en el servidor')
            })
    }
}
</script>