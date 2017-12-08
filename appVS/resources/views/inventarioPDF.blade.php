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
  <h3  ALIGN=center><strong>Reporte de Inventario</strong></h3></div><br>

    <table style="width:100%">


      <tr>
        <th ALIGN=center>ID</th>
        <th ALIGN=center>MATERIA PRIMA</th>
        <th ALIGN=center>EXISTENCIA</th>
        <th ALIGN=center>COSTO</th>
        <th ALIGN=center>INVENTARIO</th>

      </tr>
     @foreach ($materiasPrimas as $materiaPrima)
      <tr>
        <td ALIGN=center>{{$materiaPrima->idmateriaPrima}}</td>
        <td ALIGN=center>{{$materiaPrima->nombre}}</td>
        <td ALIGN=center>{{$materiaPrima->existencia_real}}</td>
        <td ALIGN=center>{{$materiaPrima->costo}}</td>
        <td ALIGN=center>{{$materiaPrima->existencia_real * $materiaPrima->costo}}</td>
      </tr>
      @endforeach
			<tr>
			<td></td>
			<td></td>
			<td></td>
			<th ALIGN=center class="text-right">Total</th>
			<td ALIGN=center class="text-center">{{$total[0]}}</td>
			</tr>
    </table>
  </body>
</html>
