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

    <h1 ALIGN=center>Reporte De Materia Prima</h1><br><br><br>
  <div ALIGN=left><span>Fecha:</span>  {{$fecha}}</div><br><br>
    <table style="width:100%">


      <tr>
        <th ALIGN=center>ID</th>
        <th ALIGN=center>NOMBRE</th>
        <th ALIGN=center>CATEGORIA</th>
        <th ALIGN=center>% PESO HUMEDO</th>
        <th ALIGN=center>EXISTENCIA MINIMA</th>

      </tr>
      @foreach($materiaPrima as $materiaP)
      <tr>
        <td ALIGN=center>{{$materiaP->idmateriaPrima}}</td>
        <td ALIGN=center>{{$materiaP->nombre}}</td>
        <td ALIGN=center>{{$materiaP->porcentaje_pesohumedo}}</td>
        <td ALIGN=center>{{$materiaP->existencia_minima}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
