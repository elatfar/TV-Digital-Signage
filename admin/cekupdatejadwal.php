<?php
include_once("session.php");

if($_POST['Submit'] == "Update")
{	

	$ID    = $_POST['id'];
    $mkuliah            = $_POST['mata_kuliah'];
    $jurusan        = $_POST['jurusan'];
    $ruang        = $_POST['ruang'];
    $waktu            = $_POST['waktu'];
    $keterangan        = $_POST['keterangan'];
		
	// update user data
	if (empty($_POST['id'])||empty($_POST['mata_kuliah'])||empty($_POST['jurusan'])||empty($_POST['ruang'])||empty($_POST['waktu'])||empty($_POST['keterangan'])) {
        ?>
        <script language="JavaScript">
            alert('Data Harap Dilengkapi!');
            document.location='jadwal.php';
        </script>
        <?php
    }
    else {
    //Masukan data ke Table
        $input    ="UPDATE jadwal_perkuliahan SET Mata_Kuliah = '$mkuliah', PRODI = '$jurusan', RUANG = '$ruang', WAKTU = '$waktu', KETERANGAN = '$keterangan' WHERE ID = '$ID'";
        $query_input = mysqli_query($db,$input);
        if ($query_input) {
    //Jika Sukses
            ?>
            <script language="JavaScript">
                alert('Jadwal berhasil diupdate');
                document.location='jadwal.php';
            </script>
            <?php
        }
        else {
    //Jika Gagal
            ?>
            <script language="JavaScript">
                alert('Input Data Gagal');
                document.location='jadwal.php';
            </script>
            <?php
        }
    }
	
	// Redirect to homepage to display updated user in list
	header("Location: jadwal.php");
}


?>