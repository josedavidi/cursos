const app = new Vue({
    el: '#app',
    data:{
        titulo:        'Autolandia',
        subtitulo:     'Velocida sin fin',
        lista_autos:   [
            {marca: 'chevrolet camaro', precio: 56300, cantidad: 5},
            {marca: 'mazda 6', precio: 31000, cantidad: 2}
        ],
    nueva_marca:'',
    cantidad_autos: 0,
    cantidad_capital:0,
    },
    methods: {
        agregarAuto(){
            this.lista_autos.push({
                marca:this.nueva_marca, cantidad: 0, precio:0
            });
            this.nueva_marca = '';
        }
    },
    computed:{
        totalAutos (){
            this.cantidad_autos = 0;
            for(auto of this.lista_autos){
                this.cantidad_autos = this.cantidad_autos + auto.cantidad
            }
            return this.cantidad_autos;
        },

        totalCapital () {
            this.cantidad_capital = 0;
            for(auto of this.lista_autos){
                this.cantidad_capital = this.cantidad_capital + auto.precio
            }

            return this.cantidad_capital;
        }

        
    }
});