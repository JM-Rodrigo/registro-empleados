@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('mensaje')}}    
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <a href="{{url('empleado/create')}}" class="btn btn-success">Nuevo registro  <i class="fa-solid fa-user-plus"></i></i></a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Correo electronico</th>
                <th>Foto</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->Nombre}}</td>
                <td>{{$empleado->ApellidoPaterno}}</td>
                <td>{{$empleado->ApellidoMaterno}}</td>
                <td>{{$empleado->Edad}}</td>
                <td>{{$empleado->Correo}}</td>
                <td>
                    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="Foto" width="100px">
                </td>
                <td>
                    <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
                <td>
                    <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Desea eliminar?')" value="Eliminar" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection