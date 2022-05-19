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
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Data Smartphone</h5><hr>
				</center>
			</p>
			<br>
			<p>
				<a class="btn btn-primary" href="tambah.php">Tambah</a>
			</p>
			<table class="table table-bordered">
				<tr>
					<th>
						No 
					</th>
					<th>
						Merk Smartphone 
					</th>
					<th>
						Tipe Smartphone
					</th>
					<th>
					Tahun Rilis
					</th>
					<th>
						Opsi
					</th>
				</tr>
					<?php
						include"koneksi.php";
						$no = 1;
						$data = mysqli_query ($koneksi, " select id,
																merk,
																tipe,
																tahun
														  from 
														  hp
														  order by id DESC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $row['merk']; ?>
					</td>
					<td>
						<?php echo $row['tipe']; ?>
					</td>
					<td>
						<?php echo $row['tahun']; ?>
					</td>
					<td>
						<a class="btn purple" href="detail.php?id=<?php echo $row['id']; ?>">Detail</a> 
						<a class="btn cyan" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
						<a class="btn red" href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
	<a href="logout.php" class="btn red">Logout</a>
</div>
</body>
</html>