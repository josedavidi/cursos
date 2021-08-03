const app = new Vue(
    {
        el: '#app',
        data: {
            titulo: 'Hola desde VUE',
            subtitulo: 'es mi sueño saber vue js :)',
            frutas: ['manzana','pera','banana','coco'],
            nuevaFruta: '',
            moviles: [
                {marca:'samsung',preciom:'500'},
                {marca:'iphone',preciom:'980'},
                {marca:'xiaomi',preciom:'130'}
            ],
            nuevoMovil : '',
            precio : '',
            autos : [
                { modelo : 'Dmax', precio: '25000'},
                { modelo : 'Aveo', precio: '16500'},
                { modelo : 'Cruze', precio: '19700'},
            ],
            auto_modelo : '',
            auto_precio : ''
        },
        methods: {
            agregarFruta () {
                this.frutas.push(
                    this.nuevaFruta
                ), this.nuevaFruta = ''
            },
            agregarMovil (){
                this.moviles.push({
                    marca: this.nuevoMovil,
                    precio: this.preciom
                });
                this.nuevoMovil = ""
                this.preciom = ""
            },



        }
    }
);