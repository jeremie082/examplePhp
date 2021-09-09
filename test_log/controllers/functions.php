<?php

function connection($log, $pwd){
   
   if($log == 'admin' && $pwd == 'admin'){
       $_SESSION['profil'] = 'admin' ;
       $_SESSION['isConnect'] = 'oui';
      return true; 
   }else{
       return false;
   }
}


function isConnect(){
    if (empty($_SESSION['isConnect']) ||  $_SESSION['isConnect'] != 'oui') {
        return false;
    }else{
        return true;
    }
}

?>