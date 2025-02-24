<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><div class="container">
    <h1>Data Jenis</h1>
    <a href="view_tambah.php">tambah data</a>
    <br><br>
    <table  class="table table-striped table-hover" border="1">
    <tr>
        <th>No.</th>
        <th>ID jenis</th>
        <th>Nama jenis</th>
        <th>Aksi</th>
    </tr>
    <?php
       include '../../config/koneksi.php';
       $query = mysqli_query($conn,"SELECT * FROM jenis");
       $no=1;
       if(mysqli_num_rows($query)){
        while($result=mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $result['id_jenis']?></td>
                <td><?php echo $result['nama_jenis']?></td>
                <td>
                    <a href="">Edit |</a>
                    <a href="">Hapus |</a>
                </td>
            </tr>
            <?php
            $no++;
        }
       }else{
        echo "data kosong";
       }
    ?>
    </table>
    </div>
</body>
</html>