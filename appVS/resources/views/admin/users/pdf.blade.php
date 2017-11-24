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

    <h1 ALIGN=center>Reporte Información de Usuario</h1><br><br><br>
    <table style="width:100%">


      <tr>
        <th ALIGN=center>ID</th>
        <th ALIGN=center>Nombre</th>
        <th ALIGN=center>Correo</th>
        <th ALIGN=center>Rol</th>
        <th ALIGN=center>{{$fecha}}</th>
      </tr>
      @foreach($user as $usuario)
      <tr>
        <td ALIGN=center>{{$usuario->id}}</td>
        <td ALIGN=center>{{$usuario->name}}</td>
        <td ALIGN=center>{{$usuario->email}}</td>
        <td ALIGN=center>{{$usuario->roles[0]->name}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>

