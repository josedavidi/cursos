// const usuario = 'silvis';
// localStorage.setItem('user',usuario)
// const getUsers = localStorage.getItem('user');
// console.log(getUsers)
// localStorage.removeItem('user');

const app = new Vue({
    el:"#app",
    data:{
        fondo: localStorage.getItem('bg-color')
    },
    methods:{
        cambiarColor(bg){
            this.fondo = bg;
            localStorage.setItem('bg-color',bg);
        }
    }
})