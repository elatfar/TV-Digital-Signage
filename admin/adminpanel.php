<?php

   $sql = "SELECT * FROM user";

?>

<div style="border:0; padding:10px; width:760px; height:auto;">
<form action="action-user.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
            <td> </td>
            <td>NAMA</td>
            <td><input type="text" name="nama" size="35" maxlength="6" class="form-control"/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>PRODI</td>
            <td><div class="col-xs-5">
              <select name="user" class="form-control ">
                    <option value="-">- Pilih User -
                    <option value="BAAK">BAAK
                    <option value="BEM">BEM
                    <option value="LPPM">LPPM
                </select>
            </div></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>PASSWORD</td>
            <td><input type="password" name="password" size="35" maxlength="10" class="form-control"/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
</div>

<h2>USER TERDAFTAR</h2>
<div class="container" style="width: 98%; height: 100%; float: right; border: solid;">
	<div class="row">
		<div >
            <table class="table table-striped table-condensed" style="font-size: 15px;">
                  <thead>
                  <tr>
                      <th>NAMA</th>
                      <th>USER</th>
                      <th>ROLE</th>                                          
                  </tr>
              </thead>   
              <tbody>
                <?php 
                if($result = mysqli_query($db, $sql)){
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['NAMA'] . "</td>";
                            echo "<td>" . $row['USER'] . "</td>";
                            echo "<td>" . $row['ID_ROLE'] . "</td>"; 
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