<?php

  require_once("Template.php");


  class OracleTemplate extends Template{


      protected function ConnectDB(){
        echo "Oracle:接続";
      }

      protected function DoQuery($query){
        echo "Oracle:実行 " . $query;
      }

      protected function DisconnectDB(){
        echo "Oracle:切断";
      }


  }


 ?>
