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
                        <h5>Tambah Data Smartphone</h5><hr>
                    </center>
                </p>
                <br>

                <form role="form" method="post" action="input.php">
                    <div class="form-group">
                        <label>Merk Smartphone</label>
                        <input class="form-control" name="merk">
                    </div>
                    <div class="form-group">
                        <label>Tipe Smartphone</label>
                        <input class="form-control" name="tipe">
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Tahun Rilis</label>
                        <input class="form-control" name="tahun">
                    </div>
                    
                    <button type="submit" class="btn green">Simpan</button>
                    <a href="index.php" class="btn red" style="margin-right:1%;">Batal</a>
                </form>
            </div>
        </div>
        <p>
    </div>
    <script src="style/materialize.min.js"></script>
</body>

</html>