<?php
$ean = '303792016200';
$somme = 0;
$reste = 0;
for ($i = 1; $i <= 12;$i++ ){
    if ($i % 2 == 0){
        $somme += intval(substr($ean, $i-1,1))*3;
    }
    else
    {
        $somme += intval(substr($ean, $i-1,1));
    }
}
$reste = $somme % 10;
if ($reste == 0){
    $ean .= '0';
}
else{
    $ean .= 10-$reste;
}
echo $ean;
