<?php
function get_id(){

 $page =$_GET['page']??'1';// php 7.0 ?? gives it a default if nothing is given
 return $page;//sending the variable outside the function get_id can now be accessed outside of function
}

function get_title(){
 $page = get_id();//pulling in get_id function and the $page variable to get the page id
    switch($page){
        case 0:
        echo "i equals 0";
        break;
        case 1:
        echo "i equals 0";
        break;
        case 2:
        echo "i equals 0";
        break;
        case 3:
        echo "i equals 0";
        break;
        case 4:
        echo "i equals 0";
        break;
        case 5:
        echo "i equals 0";
        break;                                  
        
    }
}



?>