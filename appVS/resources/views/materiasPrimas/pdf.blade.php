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
  <h3  ALIGN=center><strong>Reporte de Materia Prima</strong></h3></div><br>

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
        <td ALIGN=center>{{$materiaP->categoria}}</td>
        <td ALIGN=center>{{$materiaP->porcentaje_pesohumedo}}</td>
        <td ALIGN=center>{{$materiaP->existencia_minima}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
