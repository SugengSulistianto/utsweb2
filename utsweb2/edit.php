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
	include "koneksi.php";
	$no = 1;
    $id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT merk, tipe, tahun from hp where id = $id");
	$row = mysqli_fetch_array($data);
	
?>
    <div class="container" style="margin-top:8%">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>
                    <center>
                        <h5>Edit Data <?= $row['merk'] ; ?></h5>
                        <hr>
                    </center>
                </p>
                <br>

                <form role="form" method="post" action="update.php">
                    <div class="form-group">
                        <label>Merk Smartphone</label>
                        <input type="hidden" name="id" value="<?php echo $row['id'] ; ?>">
                        <input class="form-control" name="merk" value="<?php echo $row['merk'] ; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tipe Smartphone</label>
                        <input class="form-control" name="tipe" value="<?php echo $row['tipe'] ; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tahun Rilis</label>
                        <input class="form-control" name="tahun" value="<?php echo $row['tahun'] ; ?>">
                    </div>
                    <button type="submit" class="btn green">Perbarui</button>
                    <a href="index.php" class="btn red" style="margin-right:1%;">Batal</a>
                </form>
            </div>
        </div>
    </div>
    <script src="style/materialize.min.js"></script>
</body>

</html>