<?php
$OtrosNoMetales= ["H"];
$Alcalinos=["Li","Na","K","Rb","Cs","Fr"];
$AlcalinoTerreos = ["Be","Mg","Ca","Sr", "Ba","Ra"];
$GasesNobles = ["He","Ne","Ar","Kr","Xe","Rn","Og"];

$Lantanidos = ["La","Ce","Pr","Nd","Pm","Sm","Eu","Gd","Tb","Dy","Ho","Er","Tm","Yb","Lu"];
$LantanidosDos = ["La-Lu"];
$Actinidos = ["Ac","Th","Pa","U","Np","Pu","Am","Cm","Bk","Cf","Es","Fm","Md","No","Lr"];
$ActinidosDos = ["Ac-Lr"];

$OtrosNoMetalesUno = ["C","N","O"];
$OtrosNoMetalesDos = ["P","S"];
$OtrosNoMetalesTres = ["Se"];

$MetalesDTransicion = ["Sc","Ti","V","Cr","Mn","Fe","Co","Ni","Cu","Zn"];
$MetalesDTransicionUno = ["Y","Zr","Nb","Mo","Tc","Ru","Rh","Pd","Ag","Cd"];
$MetalesDTransicionDos = ["Hf","Ta","W","Re","Os","Ir","Pt","Au","Hg"];
$MetalesDTransicionTres = ["Rf","Db","Sg","Bh","Hs","Mt","Ds","Rg","Cn"];

$OtrosMetalesUno = ["Al"];
$OtrosMetalesDos = ["Ga"];
$OtrosMetalesTres = ["Ln","Sn"];
$OtrosMetalesCuatro = ["TI","Pb","Bi"];
$OtrosMetalesCinco = ["Nh","FI","Mc","Lv"];

$MetaloidesUno = ["B"];
$MetaloidesDos = ["Si"];
$MetaloidesTres = ["Ge","As",];
$MetaloidesCuatro = ["Sb","Te"];
$MetaloidesCinco = ["Po"];

$Halogenos = ["F","CI","Br","I","At","Ts"];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Periodica</title>
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    
</head>
<body>

<h1>Tabla Periodica</h1>


<table id="table" border="1">


  <tr>

    <TD BGCOLOR="#D7A4CC">Alcalinos</td>

    <td BGCOLOR="#EFAAD2">AlcalinoTerreos</td>

    <td BGCOLOR="#CE9D0E">Metales de transicion / Bloque D</td>

    <td BGCOLOR="#CE6C0E">Lantanidos</td>

    <td BGCOLOR="#E7938C">Actinidos</td>

    <td BGCOLOR="#7CAD67">Otros metales</td>
    

    <td BGCOLOR="yellowgreen">Metaloides</td>
    

    <td BGCOLOR="#7CAD67">Otros no metales</td>

    <td BGCOLOR="#629CA6">Halogenos</td>

    <td BGCOLOR="#6FB2CF">Gases Nobles</td>

  </tr>

</table>
<br>
<br>
<?php  foreach($OtrosNoMetales as $otrosnometales): ?>

<div class="OtrosNoMetales"> <?php echo "<span> {$otrosnometales} </span>" ?> </div>

<?php endforeach ?>
</div> 

<div>
<?php  foreach($Alcalinos as $alcalinos): ?>

<div class="Alcalinos"> <?php echo "<span> {$alcalinos} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($AlcalinoTerreos as $alcalinoterreos): ?>

<div class="AlcalinoTerreos"> <?php echo "<span> {$alcalinoterreos} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($GasesNobles as $gasesnobles): ?>

<div class="GasesNobles"> <?php echo "<span> {$gasesnobles} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($Lantanidos as $lantanidos): ?>
<div class="Lantanidos"> <?php echo "<span> {$lantanidos} </span>" ?> </div>
<?php endforeach ?>
</div>

<div>
<?php  foreach($LantanidosDos as $lantanidosDos): ?>
<div class="LantanidosDos"> <?php echo "<span> {$lantanidosDos} </span>" ?> </div>
<?php endforeach ?>
</div>

<div>
<?php  foreach($Actinidos as $actinidos): ?>

<div class="Actinidos"> <?php echo "<span> {$actinidos} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($ActinidosDos as $actinidosDos): ?>

<div class="ActinidosDos"> <?php echo "<span> {$actinidosDos} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($OtrosNoMetalesUno as $otrosnometalesUno): ?>

<div class="OtrosNoMetalesUno"> <?php echo "<span> {$otrosnometalesUno} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($OtrosNoMetalesDos as $otrosnometalesDos): ?>

<div class="OtrosNoMetalesDos"> <?php echo "<span> {$otrosnometalesDos} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($OtrosNoMetalesTres as $otrosnometalesTres): ?>

<div class="OtrosNoMetalesTres"> <?php echo "<span> {$otrosnometalesTres} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($MetalesDTransicion as $metalesDtransicion): ?>

<div class="MetalesDTransicion"> <?php echo "<span> {$metalesDtransicion} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($MetalesDTransicionUno as $metalesDtransicionUno): ?>

<div class="MetalesDTransicionUno"> <?php echo "<span> {$metalesDtransicionUno} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($MetalesDTransicionDos as $metalesDtransicionDos): ?>

<div class="MetalesDTransicionDos"> <?php echo "<span> {$metalesDtransicionDos} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($MetalesDTransicionTres as $metalesDtransicionTres): ?>

<div class="MetalesDTransicionTres"> <?php echo "<span> {$metalesDtransicionTres} </span>" ?> </div>

<?php endforeach ?>
</div>


<div>
<?php  foreach($OtrosMetalesUno as $Otrosmetalesuno): ?>

<div class="OtrosMetalesUno"> <?php echo "<span> {$Otrosmetalesuno} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($OtrosMetalesDos as $otrosmetalesdos): ?>

<div class="OtrosMetalesDos"> <?php echo "<span> {$otrosmetalesdos} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($OtrosMetalesTres as $otrosmetalestres): ?>

<div class="OtrosMetalesTres"> <?php echo "<span> {$otrosmetalestres} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($OtrosMetalesCuatro as $otrosmetalescuatro): ?>

<div class="OtrosMetalesCuatro"> <?php echo "<span> {$otrosmetalescuatro} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($OtrosMetalesCinco as $otrosmetalescinco): ?>

<div class="OtrosMetalesCinco"> <?php echo "<span> {$otrosmetalescinco} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($MetaloidesUno as $metaloidesUno): ?>

<div class="MetaloidesUno"> <?php echo "<span> {$metaloidesUno} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($MetaloidesDos as $metaloidesdos): ?>

<div class="MetaloidesDos"> <?php echo "<span> {$metaloidesdos} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($MetaloidesTres as $metaloidestres): ?>

<div class="MetaloidesTres"> <?php echo "<span> {$metaloidestres} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($MetaloidesCuatro as $metaloidescuatro): ?>

<div class="MetaloidesCuatro"> <?php echo "<span> {$metaloidescuatro} </span>" ?> </div>

<?php endforeach ?>
</div>

<div>
<?php  foreach($MetaloidesCinco as $metaloidescinco): ?>

<div class="MetaloidesCinco"> <?php echo "<span> {$metaloidescinco} </span>" ?> </div>

<?php endforeach ?>
</div>


<div>
<?php  foreach($Halogenos as $Halogenos): ?>

<div class="Halogenos"> <?php echo "<span> {$Halogenos} </span>" ?> </div>

<?php endforeach ?>
</div>

   
</body>
</html>