<?php

  class BookingController{
    
    public function index(){
      $b = new Booking();
      $data=[
        'title'=>'Search For Trip',
        'ville_depart'=>'',
        'ville_arrivee'=>''
      ];
      if($_SERVER['REQUEST_METHOD']=='POST'){
        $data=[
          'title'=>'Search For Trip',
          'ville_depart'=>trim($_POST['ville_depart']),
          'ville_arrivee'=>trim($_POST['ville_arrivee']),
          'result'=>''
        ];
        if($b->search_trip($data['ville_depart'],$data['ville_arrivee'])){
          $data['result']=$b->search_trip($data['ville_depart'],$data['ville_arrivee']);
          View::load('component/booking/search_trip',$data);
        }else{
          $data['warning']='There is no travel available for this Trip';
          View::load('component/booking/index',$data);
        }
      }else{
        View::load('component/booking/index',$data);
      }
    }


    public function book_now($id){
      $b=new booking();
      $data=[
        'title'=>'Booking Now',
        'trip'=>$b->get_trip_by_id($id)
      ];
      if(isset($_SESSION['client_email'])){
        $data['client']=$b->get_client($_SESSION['client_email']);
      }
      if($_SERVER['REQUEST_METHOD']=='POST'){
        $data=[
          'nom'=>trim($_POST['nom']),
          'prenom'=>trim($_POST['prenom']),
          'date_naissance'=>trim($_POST['date_naissance']),
          'email'=>trim($_POST['email'])
        ];
        if($b->get_user_id($_POST['email'])==0 && !isset($_SESSION['client_email'])){
          $b->insert_user($data['nom'],$data['prenom'],$data['date_naissance'],$data['email']);
          $data['user']=$b->get_user_id($_POST['email']);
          $data['id_user']=$data['user']['id'];
          $b->insert_res_user($data['id_user'],$id);
          View::load('component/home',$data);
        }elseif($b->get_user_id($_POST['email']) && !isset($_SESSION['client_email'])){
          $data['user']=$b->get_user_id($_POST['email']);
          $data['id_user']=$data['user']['id'];
          $b->insert_res_user($data['id_user'],$id);
          View::load('component/home',$data);
        }elseif(isset($_SESSION['client_email'])){
          // $_SESSION['client_id']=$data['client']['id'];
          // $_SESSION['client_nom']=$data['client']['nom'];
          // $_SESSION['client_prenom']=$data['client']['prenom'];
          // $_SESSION['client_age']=$data['client']['date_naissance'];
          $data['client']=$b->get_client($_SESSION['client_email']);
          $data['id_client']=$data['client']['id'];
          $b->insert_res_client($data['id_client'],$id);
          View::load('location:'.BURL.'bookNow',$data);
          header('location:'.BURL.'basket');
        }
        
      }else{
        View::load('component/booking/bookNow',$data);
      }
    }
    // public function search_trip(){
    //   $b = new Booking();
    //   if($_SERVER['REQUEST_METHOD']=='POST'){
    //       $ville_depart=$_POST['ville_depart'];
    //       $ville_arrivee=$_POST['ville_arrivee'];
    //       if($b->search_trip($ville_depart,$ville_arrivee)){
    //         $data['result']=$b->search_trip($ville_depart,$ville_arrivee);
    //         View::load('component/booking/search_trip',$data);
    //       }else{
    //         $data['warning']='There is no travel available for this Trip';
    //         View::load('component/booking/index',$data);
    //       }
    //   }
    // }
    
  }

  