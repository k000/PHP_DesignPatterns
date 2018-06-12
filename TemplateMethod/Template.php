<?php

    abstract class Template{

      protected $sql = null;

      public function ExecuteQuery($query){
          $this->ConnectDB();
          $this->DoQuery($query);
          $this->DisconnectDB();
      }

      abstract protected function ConnectDB();
      abstract protected function DoQuery($query);
      abstract protected function DisconnectDB();

    }


 ?>
