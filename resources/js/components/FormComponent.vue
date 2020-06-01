<template>
      <div class="card">
                <div class="card-header">Tasks</div>

                <div class="card-body">
              

                    <form action="">
                        <div class='form-group'>
                            <label for="task">New task</label>
                            <input type="text" class='form-control' name='task'>

                        </div>
                        <button type="submit" class='btn btn-success'>Guardar</button>
                    </form>
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
