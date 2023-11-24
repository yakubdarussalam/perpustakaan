<?php
include "../../../config/connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $member_id = $_POST["member_id"];
    $staff_id = $_POST["staff_id"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Validasi data
    $errors = [];

    // Validasi Code (contoh: tidak boleh kosong dan harus alfanumerik)
    
    // Jika tidak ada error, simpan data ke database
    if (empty($errors)) {
        $sql = "INSERT INTO taker (member_id, staff_id, date , time) VALUES ('$member_id', '$staff_id', '$date', '$time')";
        session_start();
        if (mysqli_query($conn, $sql)) {
            // Data berhasil disimpan
            $_SESSION['success_message'] = "Input Data Success";
            header("Location: ../../dashboard.php?module=taker");
            
        } else {
            // Terjadi kesalahan
            $errors[] = "Error: " . mysqli_error($conn);
            $_SESSION['error_message'] = $errors;
            header("Location: ../../dashboard.php?module=taker");
        }
        
    }
}

// Jika akses langsung ke action file tanpa submit form
else {
    header("Location: ../../dashboard.php?module=taker");
    exit();
}

mysqli_close($conn); // Tutup koneksi database


?>