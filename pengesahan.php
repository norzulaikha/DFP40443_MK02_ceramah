<?php
$harga_unit = 50;

// Ambil data borang
$nama = $_POST['nama'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$kategori = $_POST['kategori'];
$slot = $_POST['slot'];

// Kira jumlah bayaran
$jumlah = $harga_unit * $slot;

// Folder upload
$uploadDir = "uploads/";

// Kalau folder tak wujud, buat folder
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Upload resit
$filename = time() . "_" . basename($_FILES['resit']['name']); // nama unik
$tmp = $_FILES['resit']['tmp_name'];
move_uploaded_file($tmp, $uploadDir . $filename);

// Simpan data ke CSV
$file = fopen("data.csv", "a"); // 'a' = append
fputcsv($file, [$nama, $email, $telefon, $kategori, $slot, $jumlah, $filename]);
fclose($file);
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin:0; padding:0;}
        .container { max-width: 900px; margin: 50px auto; background: white; padding: 20px; border-radius: 10px;}
        table { width: 100%; border-collapse: collapse; margin-top: 20px;}
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 10px; text-align: left; }
        th { background-color: #0d6efd; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .success { margin-top: 20px; padding: 10px; background: #d4edda; color: #155724; border-radius: 5px; }
        a { color: #0d6efd; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">
    <h1>Pengesahan Pendaftaran</h1>

    <table>
        <tr><td>Nama Penuh</td><td><?php echo htmlspecialchars($nama); ?></td></tr>
        <tr><td>Email</td><td><?php echo htmlspecialchars($email); ?></td></tr>
        <tr><td>No Telefon</td><td><?php echo htmlspecialchars($telefon); ?></td></tr>
        <tr><td>Kategori</td><td><?php echo htmlspecialchars($kategori); ?></td></tr>
        <tr><td>Bilangan Slot</td><td><?php echo htmlspecialchars($slot); ?></td></tr>
        <tr><td>Harga Seorang</td><td>RM <?php echo number_format($harga_unit,2); ?></td></tr>
        <tr><td><strong>Jumlah Bayaran</strong></td>
            <td><strong>RM <?php echo number_format($jumlah,2); ?></strong></td>
        </tr>
        <tr><td>Bukti Pembayaran</td>
            <td><a href="<?php echo $uploadDir . htmlspecialchars($filename); ?>" target="_blank"><?php echo htmlspecialchars($filename); ?></a></td>
        </tr>
    </table>

    <p class="success">Pendaftaran anda telah berjaya!</p>
</div>

</body>
</html>
