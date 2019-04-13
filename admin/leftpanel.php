<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="index.php">Home</a></li>
				<li <?php if($role1=="4")echo "style=\"display: none\""; ?> ><a href="media.php">Media</a></li>
				<li <?php if($role1!="1")echo "style=\"display: none\""; ?>><a href="jadwal.php">Jadwal Perkuliahan</a></li>
			</ul>
		</div>
		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form
                </div>
                <div class="panel-body">
                 <div class="span3">