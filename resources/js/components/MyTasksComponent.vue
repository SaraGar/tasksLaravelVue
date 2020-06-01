<template>
    <div class="container">
       <div class="col-md-8 offset-md-2">
            <form-component  @new='addTask'></form-component>
            <br>
            <task-component v-for="task in tasks" :key='task.id' :task='task'></task-component>            
        </div>
    </div>
</template>

<script>
    export default {

        data(){
            return {
                tasks : [
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            addTask(task){
                this.tasks.push(task);
            }
        }
    }
</script>
