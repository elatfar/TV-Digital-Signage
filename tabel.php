<?PHP
include('config.php');

$sql = "SELECT * FROM jadwal_perkuliahan limit 15";

$result = mysqli_query($db, $sql);

if(mysqli_num_rows($result) > 15){
header('refresh: 10; url=tabel2.php');
}else{
header('refresh: 10; url=index.php');
}

?>

<link href="css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body style="background-color: black">
  <div class="container" style="width: 98%; height: 100%; float: right">
  <div class="row">
    <div >
            <table class="table table-bordered table-condensed" style="font-size: 28px; color: #ffffff; background-color: black;">
                  <thead>
                  <tr>
                      <th>MATA KULIAH</th>
                      <th>PRODI</th>
                      <th>RUANG</th>
                      <th>WAKTU</th>  
                      <th>KETERANGAN</th>                                          
                  </tr>
              </thead>   
              <tbody>
                <?php 
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['Mata_Kuliah'] . "</td>";
                            echo "<td>" . $row['PRODI'] . "</td>";
                            echo "<td>" . $row['RUANG'] . "</td>";
                            echo "<td>" . $row['WAKTU'] . "</td>";
                            if($row['KETERANGAN'] == 1){
                                echo "<td align=\"center\"><span class=\"label label-success\">TERSEDIA</span></td>";
                            }elseif ($row['KETERANGAN'] == 0) {
                                echo "<td align=\"center\"><span class=\"label label-important\">KOSONG</span></td>";
                            }else{
                                echo "<td>NULL</td>";
                            }
                        echo "</tr>";
                    }
                    echo "</tbody>";
        // Free result set
                    mysqli_free_result($result);
                    } else{
                        echo "No records matching your query were found.";
                    }
                ?>                         
              </tbody>
            </table>
            </div>
  </div>
</div>
</body>
