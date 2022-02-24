<?php
  session_start();
  function url($url=''){
      echo BURL.$url;
  }
  // function isloggedIn(){
  //   if(isset($_SESSION['client_email']))
  //     return 1;
  //   return 0;
  // }