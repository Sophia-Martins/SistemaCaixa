<?php
 
$NomeCliente=$_POST["NomeCliente"];
$Vl1=$_POST["Vl1"];
$Vl2=$_POST["Vl2"];
$VlP=$_POST["VlP"];
 
$VlT= $Vl1+$Vl2;
$VlTr= $VlP-$VlT;
 

echo"<center>";
 echo"<div style='background-color: rgb(181, 218, 233); width: 350px; height:250px;'>";
echo"<h1><i> Nota Fiscal</i></h1>";
echo "<h3>Nome do Cliente: $NomeCliente </h3>";
 
echo "<h3>Valor Total: $VlT</h3>";
 
echo "<h3>Valor Pago: $VlP</h3>";
 
echo "<h3>Valor do Troco: $VlTr</h3>";


 echo"</center>";
 echo"</div>"

?>