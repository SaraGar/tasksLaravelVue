<template>
    <div class="card">
        <div class="card-header">Tasks</div>
        <div class="card-body">
            <form action="" v-on:submit.prevent='newTask()'>
                <div class='form-group'>
                    <label for="task">New task</label>
                    <input type="text" class='form-control' name='task' v-model='description'>

                </div>
                <button type="submit" class='btn btn-success'>Guardar</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                description: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            newTask(){
                let task = {
                    id: 1, 
                    description: this.description,
                    created_at: '2020-05-25'
                }
                this.$emit('new', task);
                this.description ="";
            }
        }
    }


</script>
