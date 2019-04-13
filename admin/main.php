<h2>Running Text</h2>
<form action="updatert.php" method="POST">
    <label><?php echo $login_session; ?></label>
    <input type="text" name="runtxt" style="width: 100%; margin: 5px; " class="form-control">
    
    <div style="padding: 5px">
    	<input type="submit" name="submitrt" value="update" class="btn btn-primary pull-right">
    </div>
</form>

<h2>Preview Running Text</h2>
<div class="container" style="width: 98%; height: 100%; float: right; border: solid;">
    <div class="row">
        <div >
            <table class="table table-striped table-condensed" style="font-size: 15px;">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>MATA KULIAH</th>                                         
                  </tr>
              </thead>   
              <tbody>
                <?php 
                if($result = mysqli_query($db, $sql)){
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        if($row['ID']==1){
                            echo "<td>BAAK</td>";
                        }elseif ($row['ID']==2) {
                            echo "<td>BEM</td>";
                        }elseif ($row['ID']==3) {
                            echo "<td>LPPM</td>";
                        }
                            
                            echo "<td>" . $row['Pesan'] . "</td>";
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
<div <?php if($role1!="2")echo "hidden"; ?>>
    <h2>Today Quote</h2>
    <form action="updatert.php" method="POST">
        <select name="Kutipan" class="btn btn-primary dropdown-toggle ">
            <option value="1">Kutipan 1
                <option value="2">Kutipan 2
                    <option value="3">Kutipan 3
                    </select>
                    <textarea class="form-control" name="qt" rows="4" cols="50" style="width: 100%; margin: 5px; ">

                    </textarea>
                    <div style="padding: 5px">
                       <input type="submit" name="submitqt" value="update" class="btn btn-primary pull-right">
                   </div>
               </form>
           </div>
       </div>
