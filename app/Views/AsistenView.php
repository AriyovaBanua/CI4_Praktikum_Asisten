<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Asisten Pratikum</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>Pendaftaran Asisten Pratikum</h1>
    <div class="container fluid pt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas Praktikum</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                $hitung = 1;
                foreach ($asisten as $row) : ?>
                    <tr>
                        <td><?= $hitung?></td>
                        <td><?= $row['NIM'] ?></td>
                        <td><?= $row['NAMA'] ?></td>
                        <td><?= $row['PRAKTIKUM'] ?></td>
                        <td><?= $row['IPK'] ?></td>    
                    </tr>
                    <?php $hitung +=1; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <a class="btn btn-primary mt-1" href="/asisten/simpan">Tambah Data Asisten</a></br>
    <a class="btn btn-primary mt-1" href="/asisten/update">Edit Data Asisten</a></br>
    <a class="btn btn-primary mt-1" href="/asisten/delete">Hapus Data Asisten</a></br>
    <a class="btn btn-primary mt-1" href="/login">Logout</a>
</body>

</html>