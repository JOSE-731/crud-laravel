@extends('plantilla')

@section('Barra')
    <div class="container">
        <h1 class="mt-4 mb-4"><center> Inventario de ayudas </center></h1>
        <div class="row">
            <div class="col">
                    <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">BARRIO</th>
                                <th scope="col">GRUPO</th>
                                <th scope="col">NUMERO DE AYUDA</th>
                                <th scope="col">LIDER</th>
                                <th>Aciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($Mostrar as $data)
                              <tr>
                              <th>{{$data->id}}</th>
                              <td>{{$data->nombre_barrio}}</td>
                              <td>{{$data->nombre_grupo}}</td>
                              <td>{{$data->num_ayudas}}</td>
                              <td>{{$data->lider_grupo}}</td>
                              <td>
                                <a href="{{route('editar',$data)}}" type="button" class="btn btn-warning btn-sm">EDITAR</a>
                              <form action="{{route('eliminar',$data)}}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                  <button class="btn btn-danger btn-sm" type="submit">ELIMINAR</button>
                                </form>
                              </td>
                              </tr>
                              @endforeach
                    </tbody>
                  </table>
                  {{$Mostrar->links()}}
            </div>
        </div>
    </div> 
@endsection