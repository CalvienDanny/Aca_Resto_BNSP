<?php 
// Aktifkan tampilan error
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpoop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kota = isset($_POST['kota']) ? $_POST['kota'] : '';
    $atas_nama = isset($_POST['atas_nama']) ? $_POST['atas_nama'] : '';
    $jumlah_reservasi = isset($_POST['jumlah_reservasi']) ? $_POST['jumlah_reservasi'] : '';
    $alamat_pemesan = isset($_POST['alamat_pemesan']) ? $_POST['alamat_pemesan'] : '';
    $negara = isset($_POST['negara']) ? $_POST['negara'] : '';
    $kode_pos = isset($_POST['kode_pos']) ? $_POST['kode_pos'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $no_handphone = isset($_POST['no_handphone']) ? $_POST['no_handphone'] : '';
    $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';
    $payment_method = isset($_POST['payment']) ? $_POST['payment'] : '';
    
}

if (isset($_COOKIE["shopping_cart"])) {
    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
    $cart_data = json_decode($cookie_data, true);
    
    // Tampilkan struk pembelian
    echo "<h2>Struk Pembelian</h2>";
    echo "<p><strong>Atas Nama:</strong> " . htmlspecialchars($atas_nama) . "</p>";
    echo "<p><strong>Kota:</strong> " . htmlspecialchars($kota) . "</p>";
    echo "<p><strong>Jumlah Reservasi:</strong> " . htmlspecialchars($jumlah_reservasi) . "</p>";
    echo "<p><strong>Alamat Pemesanan:</strong> " . htmlspecialchars($alamat_pemesan) . "</p>";
    echo "<p><strong>Negara:</strong> " . htmlspecialchars($negara) . "</p>";
    echo "<p><strong>Kode Pos:</strong> " . htmlspecialchars($kode_pos) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>No Handphone:</strong> " . htmlspecialchars($no_handphone) . "</p>";
    echo "<p><strong>Keterangan:</strong> " . htmlspecialchars($keterangan) . "</p>";

    echo "<table border='1' cellspacing='0' cellpadding='10'>";
    echo "<tr><th>Nama Item</th><th>Jumlah</th><th>Harga per Item</th><th>Total</th></tr>";

    $grand_total = 0;
    
    foreach ($cart_data as $values) {
        $item_name = $values["item_name"];
        $item_quantity = $values["item_quantity"];
        $item_price = $values["item_price"];
        $total_price = $item_quantity * $item_price;

        echo "<tr>";
        echo "<td>" . htmlspecialchars($item_name) . "</td>";
        echo "<td>" . htmlspecialchars($item_quantity) . "</td>";
        echo "<td>Rp" . htmlspecialchars(number_format($item_price, 2)) . "</td>";
        echo "<td>Rp" . htmlspecialchars(number_format($total_price, 2)) . "</td>";
        echo "</tr>";

        // Simpan item ke database
        $user_id = 1;  // Ganti dengan ID pengguna yang sebenarnya
        $insert_query = "INSERT INTO shopping_cart (user_id, item_name, item_quantity, item_price, total_price) VALUES ('$user_id', '$item_name', '$item_quantity', '$item_price', '$total_price')";
        mysqli_query($conn, $insert_query);
        
        // Update grand total
        $grand_total += $total_price;
    }

    echo "<tr><td colspan='3' style='text-align:right;'>Total Keseluruhan:</td><td>Rp" . htmlspecialchars(number_format($grand_total, 2)) . "</td></tr>";
    echo "</table>";

    // Tambahkan tombol Kembali ke Beranda
    echo "<div style='margin-top: 20px; text-align: center;'>";
    echo "<a href='index.php' class='btn btn-primary' style='padding: 10px 20px; text-decoration: none; background-color: #007bff; color: white; border-radius: 5px;'>Kembali ke Beranda</a>";
    echo "</div>";
} else {
    echo "Keranjang belanja kosong.";
}

// Tutup koneksi
$conn->close();
?>
