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
    tambahKelompok($group_name, $group_description);
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
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $group_id = mysqli_real_escape_string($conn, $_POST['group_id']);
    $join_date = mysqli_real_escape_string($conn, $_POST['join_date']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    tambahPeserta($user_id, $group_id, $join_date, $status);
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


?>
