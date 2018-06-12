<?php
  require_once("MysqlTemplate.php");
  require_once("OracleTemplate.php");


  $mysql = new MysqlTemplate();
  $mysql->ExecuteQuery("UPDATE `comment` SET `comment` = 'コメントを変更します' WHERE `comment`.`id` = 1");

  echo "<hr>";

  $oracle = new OracleTemplate();
  $oracle->ExecuteQuery("oracle");



 ?>
