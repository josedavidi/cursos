const app = new Vue({
    el:"#app",
    data:{
        titulo: "Registro",
        names:"",
        dni:"",
        movil:"",
        status:false,
        users:[],
        progressbar:1,
    },
    methods:{
        save_user(){
            this.users.push({
                user_names:this.names,
                user_dni:this.dni,
                user_movil:this.movil,
                user_status:this.status
            });

            this.names = "";
            this.dni = "";
            this.movil = "";

            localStorage.setItem('users',JSON.stringify(this.users));
        },
        update_status(index){
            this.users[index].user_status = true;
            localStorage.setItem('users',JSON.stringify(this.users));
        },
        delete_user(index){
            this.users.splice(index,1);
        },

        check(){
            
            if(this.names != ""){
                return  this.progressbar += 33;
            }else{

            }

        }
        
        
    },
    computed:{
        btn_register(){
            return {
                'disabled' : this.names === "" || this.dni === "" ||  this.movil === ""
                
            }
        },
        

       
        
    },

    created(){
        let dbUsers = JSON.parse(localStorage.getItem('users'));
        if(dbUsers === null)
        {
            this.users = [];
        }else{
            this.users = dbUsers;
        }

        
        
    }

    
});