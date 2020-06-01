<template>
    <div class="card">
        <div class="card-header">Date {{task.created_at}}</div>
        <div class="card-body">
                <div>
                    <input v-if="editMode" type='text' class='form-control' v-model='task.description'>
                    <p v-else>{{task.description}}</p>
                </div>
            <div class="panel-footer">
                <button v-if="editMode" class='btn btn-primary' v-on:click ='onClickUpdate()'> Guardar </button>
                <button v-else class='btn btn-primary' v-on:click ='onClickEdit()'> Edit </button>
                <button class='btn btn-danger' v-on:click ='onClickDelete()'> Remove </button>
            </div>
        </div>
    </div>    
</template>

<script>
    export default {
        props: ['task'],
        data(){
            return{ 
                editMode: false
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            onClickDelete(){
                this.$emit('delete');
            },
            onClickEdit(){
                this.editMode = true;
            },
            onClickUpdate(){
                this.editMode = false;
                this.$emit('update', task);
            }
        },        
    }
</script>
