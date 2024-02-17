@extends('layouts.main')

@section('content')

<div class="col-md-10">
  <section class="py-4">
    <div class="container">
        <div class="card border-dark  mb-3" >
          <div class="card-header"><h5 class="card-title">Crear Artículo</h5></div>
            <div class="card-body text-dark ">

              
              <form action="{{ route('createarticles.create')}}" method="POST">
                @csrf

                <div class=" mb-3">
                  <label for="title" class="form-label">Nombre de Artículo</label>
                  <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
                </div>
                <div class=" mb-3">
                  <label for="content" class="form-label">Contenido</label>
                  <input type="text" class="form-control" name="content" aria-describedby="emailHelp">
                </div>
                <div class=" mb-3">
                  <label for="author" class="form-label">Autor</label>
                  <input type="text" class="form-control" name="author" aria-describedby="emailHelp">
                </div>
                <div class=" mb-3">
                  <label for="category" class="form-label">Categoría</label>
                  <input type="text" class="form-control" name="category" aria-describedby="emailHelp">
                </div>

              

            </div>
            <div class="card-footer">
              
              <div class="container">
                <div class=" md-9">
                    <i class="bi bi-exclamation-circle"></i>&nbsp; Recuerda llenar todos los campos antes de guardar.
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/articles" class="btn btn-danger"><i class="bi bi-x-circle"></i>&nbsp;Cancelar</a>
                    <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i>&nbsp;Guardar</button>       
                </div>
                      
              </div>
              
            </div>   
          </form>
        </div>
    </div>
  </section>
</div>

@endsection