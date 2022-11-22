<?php
include 'connection.php';

$id_prodi = $_GET['id_prodi'];
$query = "SELECT * FROM tbl_prodi WHERE id_prodi = '$id_prodi';";
$sql = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>
    
    <title></title>
</head>

<body>
    <nav class="navbar bg-light mb-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          DATABASE MAHASISWA
        </a>
      </div>
    </nav>
    <div class="content">
        <div class="container">
            <h3>Data Mahasiswa</h3>
            <form method="POST" action="proses_update_prodi.php">
                <?php
                $i = 1;
                while ($data_prodi = mysqli_fetch_assoc($sql)) {
                ?>
                    <input type="hidden" value="<?php echo $data_prodi['id_prodi']; ?>" name="id_prodi">
                    <div class="mb-3">
                        <label class="form-label">Jenjang</label>
                        <select class="form-select" name="jenjang" aria-label="Default select example">
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Program Studi</label>
                        <input type="text" value="<?php echo $data_prodi['nama_prodi'] ?>" class="form-control" name="nama_prodi" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                <?php } ?>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>