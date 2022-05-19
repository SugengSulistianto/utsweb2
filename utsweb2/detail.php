<html>
<title>CRUD</title>
<head>
<link rel="stylesheet" href="style/materialize.min.css" />
</head>
<body>
<nav>
        <div class="nav-wrapper teal">
        <div class="container">
          <a href="index.php" class="brand-logo center white-text">CRUD - CREAT READ UPDATE DELETE</a>
        </div>
        </div>
</nav>

<?php
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id,
											merk,
											tipe,
											tahun
									  from 
									  hp 
									  where id = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Detail <?php echo $row['merk']; ?> </h5><hr>
				</center>
			</p>
			<br>
			<p>
				<a class="btn red lighten-2" href="index.php">Kembali</a>
			</p>
			<table class="table table-stripped">
				<tr>
					<td style="width:15%;">
						Merk Smartphone 
					</td>
					<td>
						: 	<?php echo $row['merk']; ?>
					</td>
				</tr>
				<tr>
					<td style="width:15%;">
						Tipe Smartphone
					</td>
					<td>
						: 	<?php echo $row['tipe']; ?>
					</td>
				</tr>
				<tr>					
					<td style="width:15%;">
						Tahun Rilis
					</td>
					<td>
						: 	<?php echo $row['tahun']; ?>
					</td>
				</tr>
				
			</table>
		</div>
	</div>
</div>
</body>
</html>