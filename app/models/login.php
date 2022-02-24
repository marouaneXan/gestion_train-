<?php


  class Login extends DB{
      public function sign_up($nom,$prenom,$date_naissance,$email,$password){
          $sql="INSERT INTO client VALUES(NULL,?,?,?,?,?)";
          $sql=$this->connect()->prepare($sql);
          if($sql->execute(array($nom,$prenom,$date_naissance,$email,$password))){
              return 1;
          }return 0;
      }
      public function sign_in($email,$password){
          $sql="SELECT * FROM client where email = ? and password = ?";
          $sql=$this->connect()->prepare($sql);
          if($sql->execute(array($email,$password))){
              if($sql->rowCount()>0)
                {
                    return 1;
                }
          }else{
              return 0;
          }
      }
  }//$nom,$prenom,$date_naissance,,$email,$password
