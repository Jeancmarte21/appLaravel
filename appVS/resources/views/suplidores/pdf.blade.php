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

  <div><h2 ALIGN=center>EMPRESAS VICTOR SINCLAIR DOM.</h2>
  <h3  ALIGN=center><strong>Reporte de Suplidores</strong></h3></div><br>
  <div><h4 ALIGN=right><strong><span>Fecha:</span>  {{$fecha}}</strong></h4></div><br><br>

    <table style="width:100%">


      <tr>
        <th ALIGN=center>ID</th>
        <th ALIGN=center>NOMBRE</th>
        <th ALIGN=center>TELEFONO</th>
        <th ALIGN=center>CORREO</th>
        <th ALIGN=center>DIRECCION</th>

      </tr>
      @foreach($suplidor as $sup)
      <tr>
        <td ALIGN=center>{{$sup->idsuplidor}}</td>
        <td ALIGN=center>{{$sup->nombre}}</td>
        <td ALIGN=center>{{$sup->telefono}}</td>
        <td ALIGN=center>{{$sup->correo}}</td>
        <td ALIGN=center>{{$sup->direccion}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
