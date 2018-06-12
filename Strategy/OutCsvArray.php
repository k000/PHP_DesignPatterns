<?php
require_once('IStrategy.php');

class OutCsvArray implements IStrategy{

  public function get($text){
      $result = explode(',',$text);
      return $result;
  }

}
?>
