<!-- 
<?php


//   class Sign_upController{
//       public function index(){
//           View::load('component/sign_up');
//       }

//       public function sign_up(){
//           $nom=$_POST['nom'];
//           $prenom=$_POST['prenom'];
//           $date_naissance=$_POST['date_naissance'];
//           $email=$_POST['email'];
//           $password=$_POST['password'];
//           if(isset($_SERVER['REQUEST_METHOD'])=='POST'){
//               if(isset($_POST['submit'])){
//                 $sign_up=new Sign_up();
//                   if($sign_up->sign_up($nom,$prenom,$date_naissance,$email,$password)){
//                       $data['success']='Success';
//                       View::load('component/sign_in',$data);
//                   }else{
//                     $data['warning']='Error';
//                     View::load('component/sign_up',$data);
//                   }
//               }
//           }
//       }
//   }

  //$nom,$prenom,$date_naissance,,$email,$password