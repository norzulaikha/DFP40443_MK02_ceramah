<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Bengkel Elektrik & Robotik Praktikal | PTSS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <!-- TAJUK -->
    <section class="hero">
        <h1>ELEKTRONIK DAN ROBOTIK PRAKTIKAL</h1>
        <p>Kuasai Asas Elektrik & Projek Robotik Bersama Pakar Industri</p>
    </section>

    <!-- PENCERAMAH -->
    <section class="box">
        <h2>PENCERAMAH</h2>
        <img src="encikshaffie.jpg" alt="Penceramah" class="speaker">
        <p><strong>Nama:</strong>Encik Shafiee bin Husin</p>
        <p><strong>Kepakaran:</strong> Litar Elektrik, Robotik, dan Automasi</p>
    </section>

    <!-- SINOPSIS -->
    <section class="box">
        <h2>SINOPSIS CERAMAH</h2>
        <p>
            Memberi pendedahan kepada peserta mengenai asas elektronik, litar elektrik, dan pengenalan robotik menggunakan mikropengawal. Peserta akan belajar membina litar asas, mengawal LED, motor, dan sensor, serta memahami konsep automasi. Aktiviti hands-on membantu mengukuhkan pemahaman teori sambil meningkatkan kreativiti dan kemahiran praktikal.
        </p>
    </section>

    <!-- LOGISTIK -->
    <section class="box">
        <h2>MAKLUMAT PROGRAM</h2>
        <p><strong>Tarikh:</strong> 20 April 2026</p>
        <p><strong>Masa:</strong> 9.00 pagi – 2.00 petang</p>
        <p><strong>Lokasi:</strong> Dewan Harummanis PTSS</p>
    </section>

    <!-- YURAN -->
    <section class="box">
        <h2>YURAN PENDAFTARAN</h2>
        <p><strong>RM 50.00</strong> / Seorang</p>
    </section>

    <!-- HUBUNGAN -->
    <section class="box">
        <h2>HUBUNGI KAMI</h2>
        <p>Email: ceramah@politeknik.edu.my</p>
        <p>Telefon: 012-3456789</p>
    </section>

    <!-- BORANG TEMPAHAN -->
    <section class="box">
        <h2>BORANG PENDAFTARAN</h2>

        <form action="pengesahan.php" method="POST" enctype="multipart/form-data">

            <label>Nama Penuh</label>
            <input type="text" name="nama" required>

            <label>Alamat E-mel</label>
            <input type="email" name="email" required>

            <label>Nombor Telefon</label>
            <input type="text" name="telefon" required>

            <label>Kategori Peserta</label>
            <select name="kategori" required>
                <option value="">-- Pilih --</option>
                <option value="Pelajar">Pelajar</option>
                <option value="Pensyarah">Pensyarah</option>
                <option value="Orang Awam">Orang Awam</option>
                <option value="Korporat">Korporat</option>
            </select>

            <label>Bilangan Slot</label>
            <input type="number" name="slot" min="1" required>

            <label>Bukti Pembayaran</label>
            <input type="file" name="resit" required>

            <label>
                <input type="checkbox" required>
                Saya bersetuju dengan Terma & Syarat
            </label>

            <button type="submit">Hantar</button>
        </form>
    </section>

</div>

</body>
</html>
