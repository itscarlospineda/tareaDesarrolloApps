@extends('layouts.main')

@section('content')

  <div class="col-md-10">
    <section class="pt-4 my-4">
      <div class="container">
          <div class="card border-dark  mb-3" >
            <div class="card-header"><h5 class="card-title">Opciones del Sistema</h5></div>
              <div class="card-body text-dark ">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo de Notificaciones</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="carlos@correo.com">
                  <div id="emailHelp" class="form-text">Nunca se compartirá información a terceros.</div>
                </div>

                <div class="mb-3">
                  <label for="exampleInput" class="form-label">Slogan</label>
                  <input type="text" class="form-control" id="exampleInput" value="Universidad de San Pedro Sula">
                </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" @checked(true) class="form-check-input" id="exampleCheck1" {{ old('exampleCheck1') ? 'checked' : '' }}>
                  <label class="form-check-label" for="exampleCheck1">Plataforma Activa</label>
                </div>

              </div>
              
              <div class="card-footer">
                <div class="container">
                  <div class=" md-9">
                    <i class="bi bi-exclamation-circle"></i>&nbsp; Recuerda siempre guardar los cambios. 
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button type="button" class="btn btn-danger" disabled>Cancelar</button>
                      <button type="button" class="btn btn-success">Guardar</button>
                  </div>
                        
                </div>
              </div>
            
          </div>
      </div>
    </section>
  </div>

@endsection