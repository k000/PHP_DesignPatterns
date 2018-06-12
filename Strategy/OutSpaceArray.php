<?php
require_once('IStrategy.php');

class OutSpaceArray implements IStrategy{

  public function get($text){
    $result = explode(' ',$text);
    return $result;
  }

}
?>
