<?php


 function geef10procernt(){

    $koopPrijs = 75;
    $korting = 10;
   

    
    return $koopPrijs - $korting ;

 }

function zetAllesGroot(){
    echo '<h1>' . geef10procernt() . '</h1>';
    
}

echo "<h1>Het totaalbedrag is 67.50 euro.</h1>";



?>