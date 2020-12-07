<?php



function  mijnNaamIsGroot(){
    $voornaam  = "Darimir";
    $achternaam =  "Mateo";
    $gehelenaam = "Darimir mateo";
  
   
   
   Echo "mijn naam is  $gehelenaam";
   strtoupper  ($gehelenaam);

   function zetAllesGroot(){
    echo '<h1>' . mijnNaamIsGroot() . '</h1>';



}








?>