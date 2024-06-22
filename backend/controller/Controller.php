<?php
// Semua Alur diatur disini
include "Function.php";
// Error Reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ======================
// POST Method untuk Form
// ======================
// Login Handler
if(isset($_POST['login-admin'])){
    include "Database.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    LoginAdmin($username, $password);
} 
// Tambah Grup Handler
else if (isset($_POST['tambahgrup'])) {
    include "Database.php";
    $group_name = mysqli_real_escape_string($conn, $_POST['group_name']);
    $group_description = mysqli_real_escape_string($conn, $_POST['group_description']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    tambahKelompok($group_name, $group_description , $total);
} 
// Edit Kelompok Handler
else if (isset($_POST['edit-kelompok'])) {
    include "Database.php";
    $group_id = mysqli_real_escape_string($conn, $_POST['kelompok_id']);
    $group_name = mysqli_real_escape_string($conn, $_POST['kelompok_name']);
    $group_description = mysqli_real_escape_string($conn, $_POST['kelompok_description']);
    editKelompok($group_id, $group_name, $group_description);
}
// Tambah Peserta Handler
else if (isset($_POST['tambahpeserta'])) {
    include "Database.php";
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $group_id = mysqli_real_escape_string($conn, $_POST['group_id']);
    $join_date = mysqli_real_escape_string($conn, $_POST['join_date']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    tambahPeserta($user_id, $group_id, $join_date, $status, $total);
} 
// Tambah Pengguna Handler
else if (isset($_POST['tambah-pengguna'])) {
    include "Database.php";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    tambahPengguna($name, $username, $password, $email, $phone);
}
// Edit Pengguna Handler
else if (isset($_POST['edit-pengguna'])) {
    include "Database.php";
    $id = mysqli_real_escape_string($conn, $_POST['pengguna_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    editPengguna($id, $name, $username, $password, $email, $phone);
}

else if (isset($_POST['tambahtranskasi'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $group_id = mysqli_real_escape_string($conn, $_POST['group_id']);
    $join_date = mysqli_real_escape_string($conn, $_POST['join_date']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    tambahPeserta($user_id, $group_id, $join_date, $status, $total);
} 

// ======================
// GET Method Routing
// ======================
if (isset($_GET['u'])) {
    switch ($_GET['u']) {
        // View Login
        case 'login':
            LoginSessionCheck();
            include "../view/login.php";
            break;

        // Logout
        case 'logout':
            Logout();
            break;

        // View Home
        case 'home':
            SessionCheck();
            include "../view/home.php";
            break;
            
        // View Home
        case 'hasil_undian':
            SessionCheck();
            include "../view/undian.php";
            break;

        // View Kelompok
        case 'data-kelompok':
            SessionCheck();
            include "../view/data-kelompok.php";
            break;

        // Hapus Kelompok
        case 'hapus-kelompok':
            SessionCheck();
            $id = $_GET['id'];
            hapusKelompok($id);
            break;

        
        // View Data Peserta
        case 'data-peserta':
            SessionCheck();
            include "../view/data-peserta.php";
            break;

        // View Data Peserta
        case 'pembayaran':
            SessionCheck();
            include "../view/transaksi.php";
            break;

            

        // Hapus Peserta
        case 'hapus-peserta':
            SessionCheck();
            $id = $_GET['id'];
            hapusPeserta($id);
            break;

        // View Data Pengguna
        case 'data-pengguna':
            SessionCheck();
            include "../view/data-pengguna.php";
            break;

        // Hapus Pengguna
        case 'hapus-pengguna':
            SessionCheck();
            $id = $_GET['id'];
            hapusPengguna($id);
            break;

        // Invalid Link
        default:
            echo "<h3 class='text-center'>Maaf fitur belum ada / sedang dimaintenance.</h3>";
            break;
    }
} else {
    LoginSessionCheck();
    include "../view/login.php";
}


if (isset($_POST['tambah-transaksi'])) {
    include "Database.php";

    $user_id = $_POST['nama_anggota'];
    $group_id = $_POST['group_id'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    // Tambah transaksi ke database
    $query = "INSERT INTO transactions (participant_id, arisan_id, amount, transaction_date , status) VALUES ('$user_id', '$group_id', '$jumlah', '$tanggal' , 'paid')";
    if (mysqli_query($conn, $query)) {
        // Kurangi total dari tabel users
        $query_update_total = "UPDATE participants SET total = total - '$jumlah' WHERE id = '$user_id'";
        if (mysqli_query($conn, $query_update_total)) {
            // Periksa jika total pengguna sudah 0 atau kurang, dan update status jika perlu
            $query_check_total = "SELECT * FROM participants WHERE user_id = '$user_id' and group_id = '$group_id' ";
            $result = mysqli_query($conn, $query_check_total);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                if (($row['total'] - $jumlah) <= 0) {
                    $query_update_status = "UPDATE participants SET status = 'inactive' WHERE id = '$user_id'";
                    mysqli_query($conn, $query_update_status);
                }
            }
            echo "Transaksi berhasil ditambahkan dan total pengguna diperbarui.";
        } else {
            echo "Error updating total: " . mysqli_error($conn);
        }
    } else {
        echo "Error adding transaction: " . mysqli_error($conn);
    }
}

?>
