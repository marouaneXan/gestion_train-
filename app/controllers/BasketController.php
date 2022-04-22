<?php
  class BasketController{
      public function index(){
          $b=new Booking();
          $data=[
              'booking'=>$b->get_res_client($_SESSION['client_id'])
          ];
          View::load('component/basket',$data);
      }
         public function annuller_res($id){
            $u=new booking();
            $u->Cancel_res($id);
            View::load('component/basket');
            // echo "<div class='alert alert-success text-center' role='alert'>The trip Canceled successfully</div>";
       }
  }