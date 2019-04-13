<?php

$pic1 = $db->query("select LINK_GAMBAR from input_info where ID = 1")->fetch_object()->LINK_GAMBAR;
$pic2 = $db->query("select LINK_GAMBAR from input_info where ID = 2")->fetch_object()->LINK_GAMBAR;
$pic3 = $db->query("select LINK_GAMBAR from input_info where ID = 3")->fetch_object()->LINK_GAMBAR;
?>

<img class="mySlides" src="<?php echo $pic1;?>" style="width:100%; height: 100%">
<img class="mySlides" src="<?php echo $pic2;?>" style="width:100%; height: 100%">
<img class="mySlides" src="<?php echo $pic3;?>" style="width:100%; height: 100%">