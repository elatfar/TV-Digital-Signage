<?php
include('session.php');

    if($_POST['submitrt'] == "update"){
        $ID    = $db->query("select ID from user where USER = '$login_session'")->fetch_object()->ID;
        $Pesan = $_POST['runtxt'];

        $input    ="UPDATE Running_text SET Pesan = '$Pesan' WHERE ID = $ID";
        $query_input = mysqli_query($db,$input);

        header("Location: index.php");
    }


?>