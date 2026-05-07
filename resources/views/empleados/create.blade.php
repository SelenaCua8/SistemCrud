<form action="{{ url('/empleados')}}" method="post" enctype="multipart/form-data">
{{ {{ csrf_field() }}}} //una funcion que nos deje entrar a storage
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">


     <label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="">

     <label for="ApellidoMaterno">{{'Apellido Materno'}}</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="">

    <label for="Correo">{{'Correo'}}</label>
    <input type="text" name="Correo" id="Correo" value="">

    <label for="Foto">{{'Foto'}}</label>
    <input type="text" name="Foto" id="Foto" value="">





    <input type="submit" value="Agregar">


</form>
