<?php
include "../../../config/connection.php";

if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    $bookCode = $_GET["book"];

    // Lakukan proses penghapusan buku dari database
    $deleteQuery = "DELETE FROM book WHERE Code = '$bookCode'";

    if (mysqli_query($conn, $deleteQuery)) {
        // Penghapusan berhasil
        $response = ["success" => true];
        echo json_encode($response);
    } else {
        // Penghapusan gagal
        session_start();
        $errors[] = "Error: " . mysqli_error($conn);
        $_SESSION['error_message'] = $errors;
        header("Location: ../../dashboard.php?module=book");
    }

    mysqli_close($conn);

    // Arahkan pengguna kembali ke halaman dashboard dengan modul buku
    header("Location: ../../dashboard.php?module=book");
    exit();
}

// Jika akses langsung ke action file tanpa submit form
else {
    header("Location: ../../dashboard.php?module=book");
    exit();
}

mysqli_close($conn); // Tutup koneksi database
