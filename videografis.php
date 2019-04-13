<?php

$vid1 = $db->query("select LINK_VIDEO from input_video where ID = 1")->fetch_object()->LINK_VIDEO;
$vid2 = $db->query("select LINK_VIDEO from input_video where ID = 2")->fetch_object()->LINK_VIDEO;
$vid3 = $db->query("select LINK_VIDEO from input_video where ID = 3")->fetch_object()->LINK_VIDEO;
$test = 0;
?>

<video id="myvideo" controls autoplay style="background:black; width: 100%; height:100%;" >
	<source class="active" src="<?php echo $vid1;?>" type="video/mp4" />
		<source src="<?php echo $vid2;?>" type="video/mp4" />
			<source src="<?php echo $vid3; $test=1;?>" type="video/mp4" />
			</video>
