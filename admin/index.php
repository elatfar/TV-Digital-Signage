<?php
include('session.php');
include('header.php');
include('leftpanel.php');

$sql = "SELECT * FROM Running_text";

if ($role1=="4") {
    include('adminpanel.php');
}else{
    include('main.php');
}

?>