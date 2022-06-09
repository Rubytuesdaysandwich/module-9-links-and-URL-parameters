<?php
function get_id(){

 $page =$_GET['page']??'1';// php 7.0 ?? gives it a default if nothing is given
 return $page;
}

function get_title(){
   $title= $_GET['title']??'home';// php 7.0 gives it a default if nothing is given
}



?>