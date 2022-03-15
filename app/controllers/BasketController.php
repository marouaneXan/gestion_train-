<?php
  class BasketController{
      public function index(){
          $b=new Booking();
          $data=[
              'booking'=>$b->get_res_client($_SESSION['client_id'])
          ];
          View::load('component/basket',$data);
      }
  }