<?php
include 'connect.php'; // Koneksi ke database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Cerita Rakyat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan ke style.css -->
</head>
<body>

    <!-- Header -->
    <header class="header">
        <h1>Shopping Book</h1>
        <p>Your tagline here</p>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h1>Daftar Buku Cerita Rakyat</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Genre</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>ISBN</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk mendapatkan data buku dari database
                $sql = "SELECT * FROM buku";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    // Menampilkan setiap data buku dalam tabel
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . htmlspecialchars($row['id']) . "</td>
                            <td>" . htmlspecialchars($row['judul']) . "</td>
                            <td>" . htmlspecialchars($row['pengarang']) . "</td>
                            <td>" . htmlspecialchars($row['genre']) . "</td>
                            <td>" . htmlspecialchars($row['tahun_terbit']) . "</td>
                            <td>" . htmlspecialchars($row['penerbit']) . "</td>
                            <td>" . htmlspecialchars($row['isbn']) . "</td>
                            <td>" . htmlspecialchars($row['harga']) . "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>Tidak ada data</td></tr>";
                }

                // Menutup koneksi
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="footer bg-light mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Shopping Book. Fikryawan Nugraha.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="java.js"></script>
</body>
</html>
