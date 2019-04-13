<?php
// include database connection file
include_once("session.php");
include('header.php');
include('leftpanel.php');
 
// Check if form is submitted for user update, then redirect to homepage after update

// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($db, "SELECT * FROM jadwal_perkuliahan WHERE ID=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id = $user_data['ID'];
	$mkuliah = $user_data['Mata_Kuliah'];
	$ruang = $user_data['RUANG'];
	$waktu = $user_data['WAKTU'];
}
?>

	
	<form name="update_user" method="POST" action="cekupdatejadwal.php">
		    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
            <td> </td>
            <td>ID</td>
            <td><input type="text" name="id" size="35" maxlength="6" value="<?php echo $id;?>" ></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>MATA KULIAH</td>
            <td><input type="text" name="mata_kuliah" size="50" value="<?php echo $mkuliah;?>" ></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>PRODI</td>
            <td><select name="jurusan">
                    <option value="-">- Pilih Jurusan -
                    <option value="SI">Sistem Informasi
                    <option value="TI">Teknik Informasi
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>RUANG</td>
            <td><input type="text" name="ruang" size="35" maxlength="10" value="<?php echo $ruang;?>" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>WAKTU</td>
            <td><input type="text" name="waktu" size="35" maxlength="15" value="<?php echo $waktu;?>" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>KETERANGAN</td>
            <td><select name="keterangan">
                    <option value="-">- Pilih -
                    <option value="1">ADA
                    <option value="0">TIDAK ADA
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td> <input type="submit" name="Submit" value="Update"></td>
        </tr>
    </table>
	</form>