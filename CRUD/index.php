<?php
include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY nim DESC");
?>
 
<html>
<head>  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <title>Homepage</title>
</head>
 
<body>

    <div class="container mt-5" align="right">
        <a class="btn btn-success mb-3" href="add.php" role="button">Add New Mahasiswa</a>
    </div>
    

    <div class="container">
        <table width='50%' border=1 class="table table-striped table-bordered text-center">
        <tr>
            <th>NIM</th> 
            <th>Nama</th> 
            <th>Jurusan</th> 
            <th>Alamat</th> 
            <th>Telepon</th> 
            <th>Action</th>
        </tr>
        <?php 

        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['NIM']."</td>";
            echo "<td>".$user_data['Nama']."</td>";
            echo "<td>".$user_data['Jurusan']."</td>";    
            echo "<td>".$user_data['Alamat']."</td>";    
            echo "<td>".$user_data['Telepon']."</td>";            
            echo "<td><a class='btn btn-warning me-md-2' href='edit.php?NIM=$user_data[NIM]' role='button'>Edit</a> <a class='btn btn-danger' href='delete.php?NIM=$user_data[NIM]' role='button'>Delete</a></td></tr>";        
        }

        ?>
        </table>

    </div>

</body>
</html>