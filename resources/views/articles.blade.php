@extends('layouts.main')

@section('content')
<head>

    <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
</head>

<div class="col-md-10">
    <section class="py-4">
      <div class="container">
        @if($message = Session::get('Mensaje'))
        <div class="alert alert-success">
          <ul>
            <h5>Confirmación:</h5>
              <span>{{ $message }}</span>
          </ul>
        </div>
      @endif

          <div class="card border-dark" >
            <div class="card-header"><h5 class="card-title">Artículos</h5></div>

              <div class="container mt-3">
                    <a class="btn btn-success col-auto" href="/createarticles">
                        <i class="bi bi-journal-arrow-up"></i>&nbsp;Crear Nuevo</a>
              </div>

              <div class="card-body container">
                <div class="table-responsive-sm">
                <table class="table table-striped table-hover" id="example" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($articles as $article)
                        <tr>
                            <td class="fw-bold">{{ $article->title}}</td>
                            <td>{{ $article->author}}</td>
                            <td>
                                <a href="{{ route('editarticles.edit', ['id'=>$article->id])}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i>
                                    &nbsp;Editar</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                </div>
              </div>
            
          </div>
      </div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
  <script>let table = new DataTable('#example');</script>
@endsection
