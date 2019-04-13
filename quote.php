<?php

$qt1 = $db->query("select Kutipan from Kutipan where ID = 1")->fetch_object()->Kutipan;
$qt2 = $db->query("select Kutipan from Kutipan where ID = 2")->fetch_object()->Kutipan;
$qt3 = $db->query("select Kutipan from Kutipan where ID = 3")->fetch_object()->Kutipan;

?>

<ul>
  <li class="anim1">
    <div class="quote"><?php echo $qt1;?></div>
  </li>
  <li class="anim2">
    <div class="quote"><?php echo $qt2;?></div>
  </li>
  <li class="anim3">
    <div class="quote"><?php echo $qt3;?></div>
  </li>
</ul>