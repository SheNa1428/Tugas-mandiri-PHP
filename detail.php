
 <?php
if (
    !isset($_GET["nim"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["nilai"])
) {
    header("Location: ../index.php");
    exit;
}

$nilai = $_GET["nilai"];

if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 75) {
    $grade = "B";
} elseif ($nilai >= 65) {
    $grade = "C";
} else {
    $grade = "D";
}

if ($nilai >= 70) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Profil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container py-5">
    <div class="card-utama p-4" style="max-width: 500px; margin: auto; border: 1px solid #ddd !important; padding: 10px; border-radius: 10px;">
<table>
        <h4 class="fw-bold mb-3">Detail Mahasiswa</h4>

        <ul class="list-group border-0 mb-3">
            <li class="list-group-item bg-light border-0 mb-2"><b>NIM:</b> <?= $_GET["nim"]; ?></li>
            <li class="list-group-item bg-light border-0 mb-2"><b>Nama:</b> <?= $_GET["nama"]; ?></li>
            <li class="list-group-item bg-light border-0 mb-2"><b>Jurusan:</b> <?= $_GET["jurusan"]; ?></li>
            <li class="list-group-item bg-light border-0 mb-2"><b>Email:</b> <?= $_GET["email"]; ?></li>
            <li class="list-group-item bg-light border-0 mb-2"><b>Nilai:</b> <?= $_GET["nilai"]; ?></li>
            <li class="list-group-item bg-light border-0 mb-2"><b>Grade:</b> <?= $grade; ?></li>
            <li class="list-group-item bg-light border-0 mb-2"><b>Status:</b> <?= $status; ?></li>
        </ul>

        <a href="index.php" class="btn btn-primary btn-sm">Kembali</a>
</table>
    </div>
</div>

</body>
</html>

