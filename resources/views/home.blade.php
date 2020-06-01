@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tasks</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="">
                        <div class='form-group'>
                            <label for="task">New task</label>
                            <input type="text" class='form-control' name='task'>

                        </div>
                        <button type="submit" class='btn btn-success'>Guardar</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Publicado en HOY</div>

                <div class="card-body">
                <div>
                    TEXTO
                </div>

                <div class="panel-footer">
                    <button class='btn btn-primary'> Edit </button>
                    <button class='btn btn-danger'> Remove </button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
