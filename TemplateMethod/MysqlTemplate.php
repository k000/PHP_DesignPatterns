<?php

  require_once("Template.php");


  class MysqlTemplate extends Template{


      protected function ConnectDB(){
          echo "MySql:接続";
          //dbに接続する
          $this->sql = new mysqli("localhost","root","","sample_bbs");
          //エラー処理
          if($this->sql->connect_error){
            error_log($this->sql->connect_error);
            exit;
          }

      }


      protected function DoQuery($query){

        echo "クエリ:" . $query . "を実行します。";

        $result = $this->sql->query($query);

        if(!$result){
          echo "エラー";
        }else{
          echo "処理が完了しました";
        }

      }

      protected function DisconnectDB(){
        echo "MySql:切断";
        $this->sql->close();
      }


  }


 ?>
