<?php
//cek button    
if ($_POST['Submit'] == "Submit") {
    $ID    = $_POST['id'];
    $mkuliah            = $_POST['mata_kuliah'];
    $jurusan        = $_POST['jurusan'];
    $ruang        = $_POST['ruang'];
    $waktu            = $_POST['waktu'];
    $keterangan        = $_POST['keterangan'];
    //validasi data data kosong
    if (empty($_POST['id'])||empty($_POST['mata_kuliah'])||empty($_POST['jurusan'])||empty($_POST['ruang'])||empty($_POST['waktu'])) {
        ?>
        <script language="JavaScript">
            alert('Data Harap Dilengkapi!');
            document.location='jadwal.php';
        </script>
        <?php
    }
    else {
        include('session.php');
    //Masukan data ke Table
        $input    ="INSERT INTO jadwal_perkuliahan (ID,Mata_Kuliah,PRODI,RUANG,WAKTU,KETERANGAN) VALUES ('$ID','$mkuliah','$jurusan','$ruang','$waktu','$keterangan')";
        $query_input = mysqli_query($db,$input);
        if ($query_input) {
    //Jika Sukses
            ?>
            <script language="JavaScript">
                alert('Jadwal berhasil diinput');
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
//Tutup koneksi engine MySQL
       
    }
}
?>