<form action="{{url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @include('empleado.form')
</form>