@extends('layouts.main')

@section('content')
<style>
    .options{
        transition: all 0.3s;
    }
    .options:hover{
        transform: scale(1.05);
        background:rgb(216, 216, 216);
    }
</style>

        <div class="col-md-10 py-4 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Dashboard') }}</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                {{ __('You are logged in!') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="pt-0  py-4 my-5">
                <div class="container">
                    <div class="card border-dark mb-3">
                        <div class="card-header"><h5 class="card-title">Opciones del Sistema</h5></div>
                        <div class="row m-2">
                            <div class="col-lg">
                                <div class="card text-white bg-primary mb-3 options">
                                    <div class="card-body">
                                        <h5 class="card-title">Usuarios Activos</h5> <br>
                                        <h2 class="card-text">3 &nbsp;<i class="bi bi-people-fill"></i> </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="card text-white bg-success mb-3 options">
                                    <div class="card-body">
                                        <h5 class="card-title">Artículos Activos</h5> <br> 
                                        <h2 class="card-text">4 &nbsp;<i class="bi bi-person-vcard-fill"></i> </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="card text-white bg-danger mb-3 options">
                                    <div class="card-body">
                                        <h5 class="card-title">Autores</h5> <br> 
                                        <h2 class="card-text">7 &nbsp;<i class="bi bi-person-badge-fill"></i> </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="card text-white bg-dark mb-3 options">
                                    <div class="card-body">
                                        <h5 class="card-title">Editoriales</h5> <br> 
                                        <h2 class="card-text">10 &nbsp;<i class="bi bi-building-fill-check"></i> </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


@endsection