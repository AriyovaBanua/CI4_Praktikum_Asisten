<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Update</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">UPDATE DATA ASISTEN</h1>
        <form action="/asisten/update" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="praktikum" class="form-label">PRAKTIKUM:</label>
                <input type="text" class="form-control" id="praktikum" name="praktikum">
            </div>
            <div class="mb-3">
                <label for="ipk" class="form-label">IPK:</label>
                <input type="text" class="form-control" id="ipk" name="ipk">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
