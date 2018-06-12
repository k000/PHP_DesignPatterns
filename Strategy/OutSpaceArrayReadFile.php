<?php
require_once('IStrategy.php');

class OutSpaceArrayReadFile implements IStrategy{

  //こっちはテキストファイルを受け取る
  public function get($file){
    //file_get_contentsでファイルを読み込む
    $result = explode(' ',file_get_contents($file));
    return $result;
  }

}
?>
