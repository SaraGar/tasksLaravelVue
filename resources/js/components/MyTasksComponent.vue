<template>
    <div class="container">
       <div class="col-md-8 offset-md-2">
            <form-component></form-component>
            <br>
            <task-component></task-component>            
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
