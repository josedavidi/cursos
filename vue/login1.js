const app = new Vue({
    el:"#app",
    data:{
        mensaje: 'Hola soy Isama',
        btn: false,
        user:'',
        pass:'',
        respuesta: ''
    },
    methods:{
        check(){
            if(this.user != '' && this.pass != ''){
                return this.btn = true;
                
            }else{
                return this.btn = false
            }
        }
    },

    computed:{
        separar(){
            return this.mensaje.split('').reverse().join('');
        },
        
    }
});