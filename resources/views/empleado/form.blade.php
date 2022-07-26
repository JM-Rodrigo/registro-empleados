<h1 align="center">{{$modo}} empleado</h1>
<div class="mb-3">
    <label for="Nombre">Ingresa tu nombre:</label>
    <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
</div>
<div class="mb-3">
    <label for="ApellidoPaterno">Ingresa tu apellido paterno:</label>
    <input  class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}"> 
</div>
<div class="mb-3">
    <label for="ApellidoMaterno">Ingresa tu apellido materno:</label>
    <input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
</div>
<div class="mb-3">
    <label for="Edad">Ingresa tu edad:</label>
    <input class="form-control" type="number" name="Edad" id="Edad" value="{{isset($empleado->Edad)?$empleado->Edad:old('Edad')}}">
</div>
<div class="mb-3">
    <label for="Correo">Ingresa tu correo electronico:</label>
    <input class="form-control" type="email" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
</div>
<div class="mb-3">
    <label for="Foto">Ingresa tu fotografía:</label>
    @if (isset($empleado->Foto))
        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="Foto" width="100px">
    @endif
    <input type="file" name="Foto">
</div>
<input type="submit" class="btn btn-primary" value="{{$modo}} datos">

<a href="{{url('empleado/')}}" class="btn btn-success">Regresar</a>
