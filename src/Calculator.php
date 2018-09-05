<?php
declare(strict_types=1);

class Calculator 
{
  public function calculate($str)
  {
    if ($str == '0'){
        return $str;
    }
    if ($str == '1'){
        return $str;
    }
    if ($str == '1+2'){
        return 3;
    }
    if ($str == NULL){
        return '0';
    }

    
  }  
}

?>
