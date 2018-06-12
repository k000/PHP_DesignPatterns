<?php
class FileContext{

  private $strategy;

  //ストラテジーを受け取り委譲する
  public function __construct(IStrategy $strategy){
    $this->strategy = $strategy;
  }
  //インターフェースが同じなので
  public function getData($text){
    return $this->strategy->get($text);
  }
}
?>
