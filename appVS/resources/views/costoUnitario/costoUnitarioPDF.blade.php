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
    <?php $cont = 0; $salario_acum = 0; $incent_acum = 0; $extra_acum = 0;
    	$tss_acum =0; $afs_acum = 0; $agua_acum = 0; $desc_acum = 0; $bruto_acum = 0; $neto_acum = 0;
    	$fecha = date('D, d \d\e F \d\e\l Y');
    	$semana = date('W');
      $mes = date('M')?>
    <div><h4 ALIGN=right><strong><span>Fecha:</span>  {{$fecha}}</strong></h4></div>
  <div ALIGN=center>
  <img src="./img/logo copia.ico" width="100" alt="logo"/>
  </div>

  <div><h2 ALIGN=center>EMPRESAS VICTOR SINCLAIR DOM.</h2>
  <h3  ALIGN=center><strong>Reporte de Costo Unitario</strong></h3></div><br>

  <table style="width:100%">

    <tr>
        <th class="text-center">FECHA</th>
        <th class="text-center">NOMBRE CONFIGURACIÓN</th>
        <th class="text-center">CAPA</th>
        <th class="text-center">CAPOTE</th>
        <th class="text-center">AROMA</th>
        <th class="text-center">PEGA</th>
        <th class="text-center">COSTO POR UNIDAD</th>

      </tr>
        @foreach ($costos as $costo)

      <tr>

      @if($mes != $costo->mes)
      <td>{{$costo->mes}}</td>
      @else
      <td class="text-center">-</td>
      @endif
      @if($semana != $costo->semana)
      <td>{{$costo->semana}}</td>
      @else
      <td class="text-center">-</td>
      @endif
      <td class="text-center">{{$costo->cigarro}}</td>
      <td class="text-center">{{$costo->config}}</td>
      <td class="text-center">{{$costo->total_costo}}</td>
      <td class="text-center">{{$costo->total_cigarros/$costo->dividendo}}</td>
      <td class="text-center">{{$costo->rounded}}</td>


      <?php $mes = $costo->mes;
          $semana = $costo->semana;
      ?>
      </tr>
      @endforeach

      </table>


    </body>
  </html>
