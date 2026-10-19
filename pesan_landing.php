<?php
if (
    !isset($_POST["nama"]) ||
    !isset($_POST["kelas"]) ||
    !isset($_POST["pesan"])
) {
    header("Location: form_pesan.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Terkirim</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container py-5">
    <div class="card-utama p-4" style="max-width: 500px; margin: auto;">

        <h4 class="fw-bold mb-3">Pesan Terkirim</h4>

        <ul class="list-group border-0 mb-3">
            <li class="list-group-item bg-light border-0 mb-2"><b>Nama:</b> <?= $_POST["nama"]; ?></li>
            <li class="list-group-item bg-light border-0 mb-2"><b>Kelas:</b> <?= $_POST["kelas"]; ?></li>
            <li class="list-group-item bg-light border-0 mb-2"><b>Pesan / Kesan:</b> <?= $_POST["pesan"]; ?></li>
        </ul>

        <a href="index.php" class="btn btn-primary btn-sm">Kembali ke Daftar</a>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
<script>
            Swal.fire({
                title: "Do you want to save the changes?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) Swal.fire("Saved!", "", "success");
                else if (result.isDenied) Swal.fire("Changes are not saved", "", "info");
                });
            </script>
</body>
</html>

