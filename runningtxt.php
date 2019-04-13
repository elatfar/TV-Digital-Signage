<?php


	$rt1 = $db->query("select Pesan from Running_text where ID = 1")->fetch_object()->Pesan;
$rt2 = $db->query("select Pesan from Running_text where ID = 2")->fetch_object()->Pesan;
$rt3 = $db->query("select Pesan from Running_text where ID = 3")->fetch_object()->Pesan;
?>

<div id="show" class="col-md-11 well" style="background-color:#990000; height: 50px; padding-top: 2px;" >
   <marquee behavior="scroll" direction="left" scroll="continuous" >
	<h3 style="color:#ffffff;"> 
		BAAK : <?php echo $rt1;?> |
		BEM  : <?php echo $rt2;?> |
		LPPM : <?php echo $rt3;?> |
	</h2>
</marquee>
 </div>