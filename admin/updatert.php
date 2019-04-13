<?php
include('session.php');

    if($_POST['submitrt'] == "update"){
        $ID    = $db->query("select ID from user where USER = '$login_session'")->fetch_object()->ID;
        $Pesan = $_POST['runtxt'];

        $input    ="UPDATE Running_text SET Pesan = '$Pesan' WHERE ID = $ID";
        $query_input = mysqli_query($db,$input);
    }elseif ($_POST['submitqt'] == "update") {
    	$ID = $_POST['Kutipan'];
    	$kutipan = $_POST['qt'];

    	$input    ="UPDATE Kutipan SET Kutipan = '$kutipan' WHERE ID = $ID";
        $query_input = mysqli_query($db,$input);
    }else{
    	?>
            <script language="JavaScript">
                alert('Tidak ada yang berubah');
                document.location='index.php';
            </script>
        <?php
    }

    header("Location: index.php");
?>