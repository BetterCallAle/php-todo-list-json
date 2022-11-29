const { createApp } = Vue;

createApp({
    data(){
        return{
            toDoList:[]
        }
    },
    created() {
        axios.get("server.php").then(resp=>{
            this.toDoList = resp.data;
        })
    }
}).mount("#app");