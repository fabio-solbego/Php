<?php 
$nome = "Fabio ";
$peso = "107.7" ;
$altura = "1.87";
$imc = $peso/pow($altura,2);

if($imc < 20){
    $resultado = "Peso abaixo - coma mais!";
}else if($imc >=20 && $imc <24.9 ){
    $resultado = " Peso normal - Nojento (a)";
}else if ($imc >= 25 && $imc < 24.9){
    $resultado = "Obesidade  Leve - Safadinho (a)";

}else if ($imc >= 30 && $imc < 38.9){
    $resultado = "Obesidade moderada - Caminha elefante !";
}else {
    $resultado ="Obesidade Mórbita -  traz o guindaste !";
}
echo "<h1>" .$nome. " seu imc é " .number_format($imc, 2, '.','').
"</br> seu resultado :".$resultado."</h1>";
?>