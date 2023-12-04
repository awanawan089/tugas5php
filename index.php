<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kreatif</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Formulir Kreatif</h1>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve Name, NIM, Prodi, and Fakultas from the form
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $selected_prodi = $_POST["prodi"];
        $selected_fakultas = $_POST["fakultas"];

        // 1. Jumlah karakter dalam NIM
        $jumlah_karakter = strlen($nim);

        // 2. Maksud dalam NIM
        $tahun_angkatan = substr($nim, 0, 2);

        // 3. Prodi
        $kode_prodi = substr($nim, 2, 2);

        // 4. Fakultas
        $kode_fakultas = substr($nim, 4, 2);

        // Define arrays for mapping codes to names
        $prodi_names = array(
            "53" => "Teknik Informatika",
            "55" => "Sistem Informasi",
            "51" => "Teknik Industri",
            "85" => "Magister Teknologi Informasi",
            "31" => "Manajemen Informatika",
            "34" => "Keuangan Perbankan",
            "51b" => "Ilmu Hukum",
            "52b" => "Sastra Inggris",
            "51c" => "Manajemen",
            "52c" => "Akuntansi"
        );

        $fakultas_names = array(
            "01" => "FTII",
            "02" => "FHB",
            "05" => "FEB",
            "08" => "VOKASI"
        );

        // Display the information
        echo "<p>Nama: $nama</p>";
        echo "<p>1. Jumlah karakter dalam NIM: $jumlah_karakter</p>";
        echo "<p>2. Tahun Angkatan: 20$tahun_angkatan</p>";
        echo "<p>3. Prodi: " . ($prodi_names[$selected_prodi] ?? 'Unknown') . "</p>";
        echo "<p>4. Fakultas: " . ($fakultas_names[$selected_fakultas] ?? 'Unknown') . "</p>";
    }
    ?>
    <form method="post">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
        </div>

        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM Anda" required>
        </div>

        <div class="form-group">
            <label for="prodi">Pilih Prodi:</label>
            <select id="prodi" name="prodi" class="form-control">
                <option value="53">Teknik Informatika</option>
                <option value="55">Sistem Informasi</option>
                <option value="51">Teknik Industri</option>
                <option value="85">Magister Teknologi Informasi</option>
                <option value="31">Manajemen Informatika</option>
                <option value="34">Keuangan Perbankan</option>
                <option value="51b">Ilmu Hukum</option>
                <option value="52b">Sastra Inggris</option>
                <option value="51c">Manajemen</option>
                <option value="52c">Akuntansi</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fakultas">Pilih Fakultas:</label>
            <select id="fakultas" name="fakultas" class="form-control">
                <option value="01">FTII</option>
                <option value="02">FHB</option>
                <option value="05">FEB</option>
                <option value="08">VOKASI</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Proses</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
