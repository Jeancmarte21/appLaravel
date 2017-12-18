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
    	$semana = date('W');?>
    <div><h4 ALIGN=right><strong><span>Fecha:</span>  {{$fecha}}</strong></h4></div>
  <div ALIGN=center>
  <img src="./img/logo copia.ico" width="100" alt="logo"/>
  </div>

  <div><h2 ALIGN=center>EMPRESAS VICTOR SINCLAIR DOM.</h2>
  <h3  ALIGN=center><strong>Reporte de Rendimiento Tabaco</strong></h3></div><br>

    <table style="width:100%">
      <tr>
        <th class="text-center">MES</th>
        <th class="text-center">SEMANA</th>
        <th class="text-center">TABACO</th>
        <th class="text-center">LIBRAS USADAS</th>
        <th class="text-center">CIGARROS PRODUCIDOS</th>
        <th class="text-center">RENDIMIENTO (UND)</th>
        <th class="text-center">ENVOLTURA</th>

      </tr>

      @foreach ($configuraciones as $confi)

    <tr>

    @if($mes != $confi->mes)
    <td>{{$confi->mes}}</td>
    @else
    <td class="text-center">-</td>
    @endif
    @if($semana != $confi->semana)
    <td>{{$confi->semana}}</td>
    @else
    <td class="text-center">-</td>
    @endif
    <td>{{$confi->nombre}}</td>
    <td>{{$confi->total_libras}}</td>
    <td>{{$confi->total_cigarros}}</td>
    <td>{{$confi->rendimiento.' x lb'}}</td>
    @if($confi->envoltura == 2)
    <td><font color="#DC143C">Capa</font></td>
    @else
    <td><font color="#3072CB">Capote</font></td>
    @endif


    <?php $mes = $confi->mes;
        $semana = $confi->semana;
    ?>
    </tr>
    @endforeach

    </table>


  </body>
</html>
