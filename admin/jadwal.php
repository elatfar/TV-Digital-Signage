<?php
   include('session.php');
   include('header.php');
   include('leftpanel.php');

   $sql = "SELECT * FROM jadwal_perkuliahan";

?>



<!------ Include the above in your HEAD tag ---------->

<div style="border:0; padding:10px; width:760px; height:auto;">
<form action="action-jadwal.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
            <td> </td>
            <td>ID</td>
            <td><input type="text" name="id" size="35" maxlength="6" class="form-control"/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>MATA KULIAH</td>
            <td><input type="text" name="mata_kuliah" size="50" maxlength="30" class="form-control"/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>PRODI</td>
            <td><div class="col-xs-5">
              <select name="jurusan" class="form-control ">
                    <option value="-">- Pilih Jurusan -
                    <option value="SI">Sistem Informasi
                    <option value="TI">Teknik Informasi
                </select>
            </div></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>RUANG</td>
            <td><input type="text" name="ruang" size="35" maxlength="10" class="form-control"/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>WAKTU</td>
            <td><input type="text" name="waktu" size="35" maxlength="15" class="form-control"/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>KETERANGAN</td> 
            <td><div class="col-xs-5">
              <select name="keterangan" class="form-control"">
                    <option value="-">- Pilih -
                    <option value="1">ADA
                    <option value="0">TIDAK ADA
                </select>
            </div></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
</div>

<h2>Preview Jadwal</h2>
<div class="container" style="width: 98%; height: 100%; float: right; border: solid;">
	<div class="row">
		<div >
            <table class="table table-striped table-condensed" style="font-size: 15px;">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>MATA KULIAH</th>
                      <th>PRODI</th>
                      <th>RUANG</th>
                      <th>WAKTU</th>  
                      <th>KETERANGAN</th>
                      <th>MODIFIKASI</th>                                          
                  </tr>
              </thead>   
              <tbody>
                <?php 
                if($result = mysqli_query($db, $sql)){
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['ID'] . "</td>";
                            echo "<td>" . $row['Mata_Kuliah'] . "</td>";
                            echo "<td>" . $row['PRODI'] . "</td>";
                            echo "<td>" . $row['RUANG'] . "</td>";
                            echo "<td>" . $row['WAKTU'] . "</td>";
                            if($row['KETERANGAN'] == 1){
                                echo "<td><span class=\"label label-success\">TERSEDIA</span></td>";
                            }elseif ($row['KETERANGAN'] == 0) {
                                echo "<td><span class=\"label label-danger\">KOSONG</span></td>";
                            }else{
                                echo "<td>NULL</td>";
                            }
                            echo "<td><a href='updatejadwal.php?id=$row[ID]'>Edit</a> | <a href='deletejadwal.php?id=$row[ID]'>Delete</a></td></tr>"; 
                        echo "</tr>";
                    }
                    echo "</tbody>";
        // Free result set
                    mysqli_free_result($result);
                    } else{
                        echo "No records matching your query were found.";
                    }
                } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }?>                         
              </tbody>
            </table>
            </div>
	</div>
</div>