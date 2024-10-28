<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DATA USER</title>
  </head>
  <body>
    <div class="container mt-3">
        <h1>DAFTAR USER</h1>
        <a href="index.php?aksi=create" class="btn btn-success">Tambah Data</a>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                   <th scope="row"><?php echo $user['id']; ?></th>
                   <td><?php echo ($user['nama']); ?></td>
                   <td><?php echo ($user['email']); ?></td>
                    <td>
                    <a href="index.php?aksi=detail&id=<?php echo $user['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="index.php?aksi=edit&id=<?php echo $user['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="index.php?aksi=delete&id=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>