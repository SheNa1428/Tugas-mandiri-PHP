
<?php
$mahasiswa = [
    [
        "nim"     => "25001",
        "nama"    => "Andi Pratama",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email"   => "AndiPratama354@upi.edu",
        "nilai"   => 88
    ],
    [
        "nim"     => "25002",
        "nama"    => "Budi Santoso",
        "jurusan" => "Sistem Telekomunikasi",
        "email"   => "BudiSantoso576@upi.edu",
        "nilai"   => 76
    ],
    [
        "nim"     => "25003",
        "nama"    => "Citra Lestari",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email"   => "CitraLestari687@upi.edu",
        "nilai"   => 67
    ],
    [
        "nim"     => "25004",
        "nama"    => "Dina Maharani",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email"   => "DinaMaharani890@upi.edu",
        "nilai"   => 92
    ],
    [
        "nim"     => "25005",
        "nama"    => "Eko Saputra",
        "jurusan" => "Sistem Telekomunikasi",
        "email"   => "EkoSaputra465@upi.edu",
        "nilai"   => 58
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Method Get</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container py-5">
    <div class="card-utama p-4">

        <div class="d-flex justify-content-between align-items-start mb-3">
            <div>
                <h4 class="fw-bold mb-1">Daftar Mahasiswa</h4>
                <p>Mini Website PHP Dasar</p>
            </div>

            <a href="form_pesan.php" class="btn btn-primary btn-sm">
                Isi Form Pesan
            </a>
        </div>

        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>

                <?php foreach ($mahasiswa as $data): ?>

                    <?php
                    if ($data["nilai"] >= 85) {
                        $grade = "A";
                    } elseif ($data["nilai"] >= 75) {
                        $grade = "B";
                    } elseif ($data["nilai"] >= 65) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    if ($data["nilai"] >= 70) {
                        $status = "Lulus";
                        $warna = "lulus";
                    } else {
                        $status = "Tidak Lulus";
                        $warna = "tidak-lulus";
                    }
                    ?>

                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data["nim"]; ?></td>
                        <td><?= $data["nama"]; ?></td>
                        <td><?= $data["jurusan"]; ?></td>
                        <td><?= $data["email"]; ?></td>
                        <td><?= $data["nilai"]; ?></td>
                        <td><?= $grade; ?></td>
                        <td class="<?= $warna; ?>"><?= $status; ?></td>

                        <td>
                        <a href="detail.php?nim=<?= $data['nim'] ?>&nama=<?= $data['nama'] 
                                ?>&jurusan=<?= $data['jurusan'] ?>&email=<?= $data['email'] 
                                ?>&nilai=<?= $data['nilai'] ?>&grade=<?=$grade 
                                ?>&status=<?=$status ?>" class="btn btn-primary btn-sm">Lihat Detail</a>
                        </td>
                    </tr>

                    <?php $no++; ?>

                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

</body>
</html>
