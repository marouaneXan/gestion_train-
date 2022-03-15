<?php 


  class Admin extends DB{
      public function sign_in($email,$password){
        $sql="SELECT * FROM admin where email = ? and password = ?";
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
      public function get_number_trips(){
        $sql='SELECT * FROM voyage';
        $sql=$this->connect()->prepare($sql);
        if($sql->execute()){
          if($sql->rowCount()>0)
            return $sql->rowCount();
        }return 0;
      }
      public function get_number_users(){
        $sql='SELECT * FROM user';
        $sql=$this->connect()->prepare($sql);
        if($sql->execute()){
          if($sql->rowCount()>0)
            return $sql->rowCount();
        }return 0;
      }
      public function get_number_clients(){
        $sql='SELECT * FROM client';
        $sql=$this->connect()->prepare($sql);
        if($sql->execute()){
          if($sql->rowCount()>0)
            return $sql->rowCount();
        }return 0;
      }
      // public function get_number_tickets(){
      //   $sql='SELECT * FROM billet';
      //   $sql=$this->connect()->prepare($sql);
      //   if($sql->execute()){
      //     if($sql->rowCount()>0)
      //       return $sql->rowCount();
      //   }return 0;
      // }
      public function get_all_trips(){
        $sql='SELECT v.id,v.ville_depart,v.ville_arrivee,v.heure_depart,t.nom,v.price,v.statut FROM voyage v,train t where v.id_train=t.id';
        $sql=$this->connect()->prepare($sql);
        if($sql->execute()){
          if($sql->rowCount()>0)
            return $sql->fetchAll();
        }return 0;
      }

      // select all train 
      public function get_all_trains(){
        $sql='SELECT * FROM train';
        $sql=$this->connect()->prepare($sql);
        if($sql->execute()){
          return $sql->fetchAll();
        }return 0;
      }
      // insert trip
      public function addTrip($data){
        $sql="INSERT INTO voyage (ville_depart,ville_arrivee,heure_depart,id_train,price,statut)
        VALUES (?,?,?,?,?,?)";
        $sql=$this->connect()->prepare($sql);
        if($sql->execute(array($data['ville_depart'],$data['ville_arrivee'],$data['heure_depart'],$data['n_train'],$data['price'],$data['statut']))){
          return 1;
        }return 0;
      }
      public function get_trip_by_id($id){
        $sql='SELECT * from voyage where id like ?';
        $sql=$this->connect()->prepare($sql);
        if($sql->execute(array($id))){
            return $sql->fetch();
        }return 0;
      }
      public function deleteTrip($id){
        $sql='DELETE FROM voyage WHERE id like ?';
        $sql=$this->connect()->prepare($sql);
        if($sql->execute(array($id)))
           return 1;
        return 0;
      }
      public function updateTrip($data,$id){
        $sql="UPDATE voyage SET  ville_depart=?,ville_arrivee=?,heure_depart=?,id_train=?,price=?,statut=? where id like ?";
        $sql=$this->connect()->prepare($sql);
        if($sql->execute(array($data['ville_depart'],$data['ville_arrivee'],$data['heure_depart'],$data['n_train'],$data['price'],$data['statut'],$id))){
          return 1;
        }return 0;
      }


  }