<?php
  function fecha($str){
      $a = substr($str, -14, 2);
    $anacimiento = intval($a);
    $dnacimiento = substr($str, -10, 2);
    $mnacimiento = substr($str, -12, 2);

    if($anacimiento >= 23){
        $anio = "19".($a);
    }else if(($anacimiento >=0) && ($anacimiento < 23)){
        $anio = "20".($a);
    }
    $fnacimiento = "";
    $fnacimiento = $anio.'-'.$mnacimiento.'-'.$dnacimiento;

    return $fnacimiento;
  }  
?>