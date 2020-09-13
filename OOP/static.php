<?php 

  class Weather {

    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFarenheit($c){
      return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f){
      if($f < 40){
        return self::$tempConditions[0]; //to use static variable inside class       self::$staticVariableName;
      } elseif($f < 70){
        return self::$tempConditions[1];
      } else {
        return self::$tempConditions[2];
      }
    }

  }

  // To Access static variable we have to use class instead of instance.    className::$staticVariableName;
  print_r(Weather::$tempConditions);      
  
  // similaryly to access static method we have to use class name.
  echo Weather::celsiusToFarenheit(20);
  echo Weather::determineTempCondition(80);

?>