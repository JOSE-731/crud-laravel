@extends('plantilla')

@section('Barra')
<div class="container-fluid">
<h1 class="mt-5 mb-5"><center> EDITAR LOS REGISTROS DEL BARRIO {{$Mostrar->nombre_barrio}}</center></h1>
<div class="row  justify-content-center h-100">
    <div class="col col-8">
    <form action="{{route('Update', $Mostrar->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-4">
              <h5>Nombre del barrio donde se repartiran las ayudas</h5>
            <input type="text" class="form-control" name="barrio" value="{{$Mostrar->nombre_barrio}}">
            </div>
            @error('barrio')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               CAMPO OBLIGATORIO
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
            <div class="form-group mb-4">
              <h5> Grupo que dara las entregas</h5>
              <input type="text" class="form-control" name="grupo" value="{{$Mostrar->nombre_grupo}}">
            </div>
            @error('grupo')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               CAMPO OBLIGATORIO
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
            <div class="form-group mb-4">
              <h5>Numero de ayudas a entegar</h5>
              <input type="number" class="form-control" name="numero" value="{{$Mostrar->num_ayudas}}">
            </div>
            @error('numero')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               CAMPO OBLIGATORIO
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
            <div class="form-group mb-4">
                <h5>Nombre del lider de grupo</h5>
                <input type="text" class="form-control" name="lider" value="{{$Mostrar->lider_grupo}}">
            </div>
            @error('lider')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               CAMPO OBLIGATORIO
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
            <div class="form-group mb-4">
                <h5>Numero de familias en ese barrio</h5>
                <input type="number" class="form-control" name="familia" value="{{$Mostrar->num_familias}}">
             </div>
             @error('familia')
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                CAMPO OBLIGATORIO
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
             @enderror
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
          @if (session('mensaje'))
          <div class="alert alert-primary">
              {{ session('mensaje') }}
          </div>
      @endif
    </div>
</div>
</div>
@endsection