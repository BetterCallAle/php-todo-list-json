<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="app">
        <main>
            <section id="section-list" class="py-5">
                <div class="container">
                    <ul class="list-group">
                        <li v-for="toDo in toDoList" class="list-group-item">{{ toDo.text }}</li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="container">
                    <input type="text" v-model="userToDo" placeholder="inserisci una nuova task" class="form-control w-50 d-inline-block me-4">
                    <button @click="sendTaskToServer" class="btn btn-primary">Aggiungi</button>
                </div>
            </section>
        </main>
    </div>

    <!-- Link JS -->
    <script src="js/script.js"></script>
</body>
</html>