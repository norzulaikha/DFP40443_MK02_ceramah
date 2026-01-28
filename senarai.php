<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Senarai Semua Peserta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Senarai Semua Peserta</h1>

    <table>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telefon</th>
            <th>Kategori</th>
            <th>Bil Slot</th>
            <th>Jumlah Bayaran (RM)</th>
            <th>Bukti Pembayaran</th>
        </tr>

        <?php
        if (($handle = fopen("data.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                echo "<tr>";
                for ($i = 0; $i < count($data); $i++) {
                    if ($i == 6) { // Column ke-7 = Bukti Pembayaran
                        echo "<td><a href='uploads/" . htmlspecialchars($data[$i]) . "' target='_blank'>" . htmlspecialchars($data[$i]) . "</a></td>";
                    } else {
                        echo "<td>" . htmlspecialchars($data[$i]) . "</td>";
                    }
                }
                echo "</tr>";
            }
            fclose($handle);
        }
        ?>
    </table>
</div>

</body>
</html>
