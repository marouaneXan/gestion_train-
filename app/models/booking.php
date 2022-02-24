<?php


  class Booking extends DB{

    public function search_trip($ville_depart,$ville_arrivee){
        $sql="SELECT * FROM voyage WHERE ville_depart=? and ville_arrivee=?";
        $sql=$this->connect()->prepare($sql);
        if($sql->execute(array($ville_depart,$ville_arrivee)))
            return $sql->fetchAll();
        return 0;
    }
  }