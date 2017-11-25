<!-- pdf.blade.php -->
<?php $fecha = date('d-m-Y');?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <div><h4 ALIGN=right><strong><span>Fecha:</span>  {{$fecha}}</strong></h4></div>
    <div ALIGN=center>
    <img src="./img/logo copia.ico" width="100" alt="logo"/>
  </div>

  <div><h2 ALIGN=center>EMPRESAS VICTOR SINCLAIR DOM.</h2>
  <h3  ALIGN=center><strong>Reporte de Empleados</strong></h3></div><br>


    <table style="width:100%">


      <tr>
        <th ALIGN=center>ID</th>
        <th ALIGN=center>CEDULA</th>
        <th ALIGN=center>NOMBRES</th>
        <th ALIGN=center>APELLIDOS</th>
        <th ALIGN=center>TELEFONO</th>
        <th ALIGN=center>FECHA NACIMIENTO</th>
        <th ALIGN=center>DIRECCION</th>

      </tr>
      @foreach($empleado as $emp)
      <tr>
        <td ALIGN=center>{{$emp->idempleado}}</td>
          <td ALIGN=center>{{$emp->cedula}}</td>
        <td ALIGN=center>{{$emp->nombre}}</td>
          <td ALIGN=center>{{$emp->apellidos}}</td>
        <td ALIGN=center>{{$emp->telefono}}</td>
        <td ALIGN=center>{{$emp->fecha_nacimiento}}</td>
        <td ALIGN=center>{{$emp->direccion}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
