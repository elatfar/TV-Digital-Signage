<?php
  
include('config.php');

// header('refresh: 10; url=tabel.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>INFO TV</title>

  <meta name="description" content="Source code generated using layoutit.com">
  <meta name="author" content="LayoutIt!">

<script>
    function doRefresh(){
        $("#show").load("runningtxt.php");
    }
    $(function() {
        setInterval(doRefresh, 1000);
    });
</script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/slider.css" rel="stylesheet">

</head>
<body onload="startTime()">

  <div class="container-fluid" style="width: 100%; height: 100%; overflow: hidden;  border: 1px solid green;" >
   <div class="row">
    <div class="col-md-12" style="background-color:#ffa500; height: 50px;">
     <img src="logo.png" style="height: 100%; float: left; padding-top: 1px">
     <h1 style="color: #ffffff; font-weight: bold;"> | INFO NF CAMPUS</h1>

   </div>
 </div>

 <div class="row">

  <div class="col-md-7" style=" height: 665px;">
   <div class="row">
    <div class="col-md-12" style="height: 450px; padding-top: 10px; padding-bottom: 5px;">
     <?php
     include('videografis.php')
     ?>
   </div>
 </div>
 <div class="row" style="margin: 1px; border-radius: 20px; background-color:#0f676f;">
  <div class="col-md-12" style=" height: 60px; padding-top: 5px;">
   <img src="qi-title.png" style="height: 100%; padding: 2px;">
 </div>
 <div class="col-md-12" style=" height: 145px; padding: 1px;"> 
  <div class="content-slider">
    <div class="slider">
      <div class="mask">
        <?php
        include('quote.php')
        ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-5" style="width: 150px; height: 665px; padding-top: 10px; padding-bottom: 5px;">
 <?php
 include('infografis.php')
 ?>
</div>
</div>
<div class="row">
  <div class="col-md-1" style="background-color:#0000ff; height: 50px; padding-top: 5px;">
   <h2 align='center' id="txt" style="color:#ffffff;"></h2>
 </div>
 <?php
 include('runningtxt.php')
 ?>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>