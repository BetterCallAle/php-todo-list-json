const { createApp } = Vue;

createApp({
    data(){
        return{
            toDoList:[],
            userToDo: ""
        }
    },
    created() {
        axios.get("server.php").then(resp=>{
            this.toDoList = resp.data;
        })
    },
    methods:{
        sendTaskToServer(){
            const data = {
                userToDo: this.userToDo,
            }

            axios.post("server.php", data, {
                headers: {'Content-Type': 'multipart/form-data'}
            }).then(resp =>{
                this.toDoList = resp.data;
            })

            this.userToDo = ""
        },

        checkAsDone(index){
            const data = {
                toggleIndex : index
            }

            axios.post("server.php", data, {
                headers: {'Content-Type': 'multipart/form-data'}
            }).then(resp =>{
                this.toDoList = resp.data;
            })
        },

        deleteElement(index){
            const data = {
                deleteIndex : index
            }

            axios.post("server.php", data, {
                headers: {'Content-type' : 'multipart/form-data'}
            }).then(resp => {
                this.toDoList = resp.data;
            })
        }
    }
}).mount("#app");