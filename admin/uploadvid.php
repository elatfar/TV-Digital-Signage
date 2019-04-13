<?php
include('session.php');
extract($_POST);

$target_dir = "/opt/lampp/htdocs/tv_kampus/video/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if($upd1||$upd2||$upd3)
{
	if($upd1){
		$ID = 1;
	}elseif ($upd2) {
		$ID = 2;
	}elseif ($upd3) {
		$ID = 3;
	}

	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
	{
		?>
            <script language="JavaScript">
                alert('File tidak disupport');
                document.location='media.php';
            </script>
        <?php
	} 

	else
	{

		$video_path="video/".$_FILES['fileToUpload']['name'];

		$input    ="UPDATE input_video SET LINK_VIDEO = '$video_path' WHERE ID = $ID";
        $query_input = mysqli_query($db,$input);
        if ($query_input) {
    //Jika Sukses
            ?>
            <script language="JavaScript">
                alert('Video berhasil di unggah');
                document.location='media.php';
            </script>
            <?php
        }
        else {
    //Jika Gagal
            ?>
            <script language="JavaScript">
                alert('Video gagal di unggah');
                document.location='media.php';
            </script>
            <?php
        }

		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

	}

}

?>