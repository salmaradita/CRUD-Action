<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <title>Input Data</title>
</head>
 
<body>
    <div class="container mt-5" align="right">
        <a class="btn btn-secondary mb-3" href="index.php" role="button">Back</a>
    </div>
    
    <div class="container justify-content-center">
        <div class="card">
            <div class="card-header text-white bg-primary">
                Input Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="add.php" method="post" name="form1">
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" name="jurusan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamt" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" name="telepon">
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <input type="submit" name="Submit" value="Add" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jurusan = $_POST['jurusan'];
        $telepon = $_POST['telepon'];
        
        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nim,nama,alamat,jurusan,telepon) VALUES('$nim','$nama','$alamat','$jurusan','$telepon')");
        
        echo "<div class='container'> 
            <div class='alert alert-success mt-3' role='alert'>
                <strong>Data added successfully!</strong> go to  <a href='index.php' class='alert-link'>View Data</a>
            </div>
        </div>";
    }
    ?>
    
</body>
</html>