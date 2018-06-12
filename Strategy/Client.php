<?php
require_once('OutSpaceArray.php');
require_once('OutSpaceArrayReadFile.php');
require_once('OutCsvArray.php');
require_once('FileContext.php');

 ?>


<h2>Test-Result<h2>

  <?php



  function get($text){
    return $text;
  }


      $strategy = new OutCsvArray();
      $context = new FileContext($strategy);

      var_dump($context->getData("トマト,りんご,バナナ,はちみつ"));

      echo "<hr>";

      $strategy2 = new OutSpaceArray();
      $context2 = new FileContext($strategy2);

      var_dump($context2->getData("ケーキ どら焼き あんぱん"));

      echo "<hr>";

      $strategy3 = new OutSpaceArrayReadFile();
      $context3 = new FileContext($strategy3);

      var_dump($context3->getData("sample.txt"));


   ?>
