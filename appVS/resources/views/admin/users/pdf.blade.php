<!-- pdf.blade.php -->
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
      </tr>

      <tr>
        <td ALIGN=center>{{$user->id}}</td>
        <td ALIGN=center>{{$user->name}}</td>
        <td ALIGN=center>{{$user->email}}</td>
        <td ALIGN=center>{{$user->roles[0]->name}}</td>
      </tr>

    </table>
  </body>
</html>


<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
