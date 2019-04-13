<?php
//cek button    
if ($_POST['Submit'] == "Submit") {

    $nama            = $_POST['nama'];
    $user       = $_POST['user'];
    $pw        = $_POST['password'];

        include('session.php');
    //Masukan data ke Table
        $input    ="UPDATE user SET NAMA = 'nama', PASSWORD = '$pw' WHERE USER = '$user'";
        $query_input = mysqli_query($db,$input);
        if ($query_input) {
    //Jika Sukses
            ?>
            <script language="JavaScript">
                alert('Data Berhasil Diubah');
                document.location='jadwal.php';
            </script>
            <?php
        }
        else {
    //Jika Gagal
            ?>
            <script language="JavaScript">
                alert('Data Tidak Bisa Diubah');
                document.location='jadwal.php';
            </script>
            <?php
        }
?>