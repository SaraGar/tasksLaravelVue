<template>
    <div class="card">
        <div class="card-header">Date {{task.created_at}}</div>
        <div class="card-body">
                <div>
                    {{task.description}}
                </div>
            <div class="panel-footer">
                <button class='btn btn-primary'> Edit </button>
                <button class='btn btn-danger'> Remove </button>
            </div>
        </div>
    </div>    
</template>

<script>
    export default {
        props: ['task'],
       
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
