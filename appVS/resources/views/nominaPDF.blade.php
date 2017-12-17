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
  <h3  ALIGN=center><strong>Reporte de Nomina</strong></h3></div><br>

    <table style="width:100%">
      <tr>
        <th class="text-center"></th>
        <th class="text-center" >Nombre</th>
        <th class="text-center">SALARIO</th>
        <th class="text-center">INCENT</th>
        <th class="text-center">LIC</th>
        <th class="text-center">EXTRA</th>
        <th class="text-center">BRUTO</th>
        <th class="text-center">SEG</th>
        <th class="text-center">TSS</th>
        <th class="text-center">AFS</th>
        <th class="text-center">AGUA</th>
        <th class="text-center">DESC</th>
        <th class="text-center">NETO</th>
      </tr>

     @foreach($jornadas as $jornada)
     <tr>
     <?php $cont++; $salario_acum += $jornada->salario; $incent_acum += $jornada->incent; $extra_acum += $jornada->extra; $tss_acum += $jornada->tss; $afs_acum += $jornada->afs; $agua_acum += 13; $desc_acum += $jornada->tss + $jornada->afs + 13; $bruto_acum += $jornada->salario + $jornada->incent + $jornada->extra ; $neto_acum += ($jornada->salario + $jornada->incent + $jornada->extra) - ($jornada->tss + $jornada->afs + 13) ;?>

     <td>{{$cont}}</td>
     <td>{{$jornada->nombre.' '.$jornada->apellidos}}</td>
     <td>{{$jornada->salario}}</td>
     <td>{{$jornada->incent}}</td>
     <td></td>
     <td>{{$jornada->extra}}</td>
     <td>{{$jornada->salario + $jornada->incent + $jornada->extra}}</td>
     <td></td>
     <td>{{$jornada->tss}}</td>
     <td>{{$jornada->afs}}</td>
     <td>13</td>
     <td>{{$jornada->tss + $jornada->afs + 13}}</td>
     <td>{{($jornada->salario + $jornada->incent + $jornada->extra) - ($jornada->tss + $jornada->afs + 13)}}</td>
   </tr>
      @endforeach

    </table>


  </body>
</html>
