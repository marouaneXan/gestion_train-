<?php
  
  session_start();
  function url($url=''){
      echo BURL.$url;
  }
  // function set($type,$message){
  //   setcookie($type,$message,time()+5,'/');
  // }
  // function isloggedIn(){
  //   if(isset($_SESSION['client_email']))
  //     return 1;
  //   return 0;
  // }