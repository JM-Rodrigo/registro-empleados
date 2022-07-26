<table class="table table-striped">
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
                <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>
            </td>
            <td>
                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" onclick="return confirm('¿Desea eliminar?')" value="Eliminar" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>