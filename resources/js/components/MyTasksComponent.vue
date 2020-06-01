<template>
    <div class="container">
       <div class="col-md-8 offset-md-2">
            <form-component  @new='addTask'></form-component>
            <br>
            <task-component v-for="(task, index) in tasks" :key='task.id' :task='task' @delete='deleteTask(index)'  @update='updateTask(index, ...arguments)'></task-component>            
        </div>
    </div>
</template>

<script>
    export default {

        data(){
            return {
                tasks : []
            }
        },
        mounted() {
            axios.get('/tasks').then((response) => this.tasks = response.data);
        },
        methods: {
            addTask(task){
                this.tasks.push(task);
            },
            deleteTask(index){
                this.tasks.splice(index, 1);
            }, 
            updateTask(index, task){
                this.tasks[index] = task;
            }
        }
    }
</script>
