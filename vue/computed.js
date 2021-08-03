const app = new Vue({
    el:"#app",
    data:{
        mensaje: 'Hola soy Isama',
        contador: 0,
    },

    computed:{
        separar(){
            return this.mensaje.split('').reverse().join('');
        },
        bgColor(){
            return {
                'bg-danger'   : this.contador < 10,
                'bg-primary'  : this.contador >10 && this.contador < 30,
                'bg-success'  : this.contador >30
            }
        }
        
    }
});