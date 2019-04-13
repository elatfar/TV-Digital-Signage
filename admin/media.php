<?php
   include('session.php');
   include('header.php');
   include('leftpanel.php');

   $sqlinfo = "SELECT * FROM input_info";
   $sqlvid = "SELECT * FROM input_video";

?>
<div>
<h2>Infografis</h2>
	
    <form action="uploadpic.php" method="post" enctype="multipart/form-data">
    	<select name="Info" class="btn btn-primary dropdown-toggle ">
            <option value="1">Info 1
                <option value="2">Info 2
                    <option value="3">Info 3
                    </select>
    	<label class="btn btn-default">
    		<input type="file" name="fileToUpload" style="margin: 1px;" hidden>
    	</label>
		<input type="submit" name="upd1" value="upload" class="btn btn-primary" style="margin: 5px;">
	</form>
</div>

<h3>Infografis Sukses Diupload</h3>
<div class="container" style="width: 98%; margin:10px;  float: right; border: solid;">
    <div class="row">
        <div >
            <table class="table table-striped table-condensed" style="font-size: 15px;">
                  <thead>
                  <tr>
                      <th>NO</th>
                      <th>LINK GAMBAR</th>                                         
                  </tr>
              </thead>   
              <tbody>
                <?php 
                if($result = mysqli_query($db, $sqlinfo)){
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['ID'] . "</td>";
                            echo "<td>" . $row['LINK_GAMBAR'] . "</td>";
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

<div <?php if($role1!="2")echo "hidden"; ?> >
	<h2 style="margin-top: 15px">Videografis</h2>
    <form action="uploadvid.php" method="post" enctype="multipart/form-data">
    	<select name="Video" class="btn btn-primary dropdown-toggle ">
            <option value="1">Video 1
                <option value="2">Video 2
                    <option value="3">Video 3
                    </select>
    	<label class="btn btn-default">
    		<input type="file" name="fileToUpload" style="margin: 1px;" hidden>
    	</label>
		<input type="submit" name="upd1" value="upload" class="btn btn-primary" style="margin: 5px;">
	</form>

	<h3>Videografis Sukses Diupload</h3>
<div class="container" style="width: 98%; margin:10px;  float: right; border: solid;">
    <div class="row">
        <div >
            <table class="table table-striped table-condensed" style="font-size: 15px;">
                  <thead>
                  <tr>
                      <th>NO</th>
                      <th>LINK VIDEO</th>                                         
                  </tr>
              </thead>   
              <tbody>
                <?php 
                if($result = mysqli_query($db, $sqlvid)){
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['ID'] . "</td>";
                            echo "<td>" . $row['LINK_VIDEO'] . "</td>";
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

</div>


