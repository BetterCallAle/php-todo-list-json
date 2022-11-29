<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="app">
        <div class="wrapper">
            <main>
                <section id="heading" class="py-5">
                    <div class="container text-center">
                        <h1>ToDoList</h1>
                        <p>Aggiungi e segna le task che hai fatto!</p>
                    </div>
                </section>
                <section id="section-list" class="py-5">
                    <div class="container">
                        <ul class="list-group">
                            <li v-for="(toDo, index) in toDoList" class="list-group-item d-flex justify-content-between" :class="{'done' : toDo.done}" @click="checkAsDone(index)">
                                <span>{{ toDo.text }}</span>
                                <i class="fa-solid fa-trash" @click.stop="deleteElement(index)"></i>
                            </li>
                        </ul>
                    </div>
                </section>
    
                <section>
                    <div class="container text-center">
                        <input type="text" v-model="userToDo" placeholder="inserisci una nuova task" class="form-control w-50 d-inline-block me-4" @keyup.enter="sendTaskToServer">
                        <button @click="sendTaskToServer" class="btn btn-primary">Aggiungi</button>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- Link JS -->
    <script src="js/script.js"></script>
</body>
</html>