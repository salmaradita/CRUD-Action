<?php
include_once("config.php");
 
if(isset($_POST['update'])){	

    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];
        
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',alamat='$alamat',telepon='$telepon' WHERE nim=$nim");
    
    header("Location: index.php");
}
?>

<?php
$nim = $_GET['NIM'];

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE NIM=$nim");
 
while($user_data = mysqli_fetch_array($result)){

    $nim = $user_data['NIM'];
    $nama = $user_data['Nama'];
    $jurusan = $user_data['Jurusan'];
    $alamat = $user_data['Alamat'];
    $telepon = $user_data['Telepon'];
}
?>

<html>
<head>	
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <title>Update Data</title>
</head>
 
<body>

<div class="container mt-5" align="right">
        <a class="btn btn-secondary mb-3" href="index.php" role="button">Home</a>
    </div>
    
    <div class="container justify-content-center">
        <div class="card">
            <div class="card-header text-white bg-primary">
                Update Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="edit.php" method="post" name="update_user">
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" value=<?php echo $nim;?>>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" value=<?php echo $nama;?>>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" name="jurusan" value=<?php echo $jurusan;?>>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamt" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" value=<?php echo $alamat;?>>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" name="telepon" value=<?php echo $telepon;?>>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <input type="hidden" name="nim" value=<?php echo $_GET['NIM'];?>>
                        <input type="submit" name="update" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>