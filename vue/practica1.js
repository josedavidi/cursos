const app = new Vue({
    el:"#app",
    data:{
        titulo:'Gestion de Tareas',
        tareas: [],
        nuevaTarea:''
    },
    methods:{
        agregarTarea(){
            this.tareas.push({
                tarea:this.nuevaTarea,
                estado:false
            });
            this.nuevaTarea = "";
            localStorage.setItem('my-tarea',JSON.stringify(this.tareas));
        },
        editarEstado(index){
            this.tareas[index].estado = true;
            localStorage.setItem('my-tarea',JSON.stringify(this.tareas));
        },
        borrarTarea(index){
            this.tareas.splice(index, 1);
            localStorage.setItem('my-tarea',JSON.stringify(this.tareas));
        },
    },
    created(){
        let dbTareas = JSON.parse(localStorage.getItem('my-tarea'));
        if(dbTareas === null)
        {
            this.tareas = [];
        }else{
            this.tareas = dbTareas;
        }
        console.log(dbTareas);
    }
    
});