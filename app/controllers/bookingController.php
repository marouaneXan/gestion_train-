<?php

  class BookingController{
    
    public function index(){
      View::load('component/booking/index');

    }
    public function search_trip(){
      $b = new Booking();
      if(isset($_SERVER['REQUEST_METHOD'])=='POST'){
        if(isset($_POST['submit'])){
          $ville_depart=$_POST['ville_depart'];
          $ville_arrivee=$_POST['ville_arrivee'];
          if($b->search_trip($ville_depart,$ville_arrivee)){
            $data['result']=$b->search_trip($ville_depart,$ville_arrivee);
            View::load('component/booking/search_trip',$data);
            // var_dump($b->search_trip($ville_depart,$ville_arrivee));
          }else{
            $data['warning']='This is no travel available for this Trip';
            View::load('component/booking/index',$data);
          }
        }
      }
    }
  }

  