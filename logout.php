<?php
session_start();

session_unset();
if(session_unset()==true){
header('Location:index.html');
}
?>