<?php
// File ini berisi fungsi-fungsi dasar
// Error Reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ==============================================
//              Kontrol Database
// ============================================== 
// Fungsi Login
// ==============================================
// Fungsi Login Admin
function LoginAdmin($username, $password) {
    include "Database.php";
    session_start();
    $enc_password = md5($password);  // Menggunakan md5 untuk hashing password
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$enc_password'");
    $fetchdata = mysqli_fetch_array($query);
    if (!empty($fetchdata['username'])) {
        $_SESSION['admin_id'] = $fetchdata['admin_id'];  // Menggunakan nama kolom dari tabel SQL yang telah kita buat
        $_SESSION['username'] = $fetchdata['username'];
        $_SESSION['name'] = $fetchdata['name'];
        echo "<script>window.location='$_SERVER[PHP_SELF]?u=home';</script>";
        exit;
    } else {
        echo "<script>window.location='$_SERVER[PHP_SELF]?u=login&error=1';</script>";
        exit;
    }
}

// Fungsi Ubah Akun Admin
function ubahAkunAdmin($admin_id, $old_password, $username, $password){
    include "Database.php";
    
    // Verifikasi password lama
    $query = mysqli_query($conn, "SELECT password FROM admin WHERE admin_id='$admin_id'");
    $result = mysqli_fetch_assoc($query);

    if (md5($old_password) == $result['password']) {
        // Tentukan apakah password baru diisi atau tidak
        if (!empty($password)) {
            // Enkripsi password baru menggunakan MD5
            $hashed_password = md5($password);
        } else {
            // Gunakan password lama
            $hashed_password = $result['password'];
        }
        
        // Update data di database
        $query_update = mysqli_query($conn, "UPDATE admin SET username='$username', password='$hashed_password' WHERE admin_id='$admin_id'");
        
        if (!$query_update) {
            die("Query error: " . mysqli_error($conn));
        } else {
            // Update session data
            $_SESSION['username'] = $username;
            
            echo "<script>window.location='$_SERVER[PHP_SELF]?u=logout';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Password lama salah!');window.location='$_SERVER[PHP_SELF]?u=home';</script>";
    }
}

// Fungsi Periksa Session Login 
function LoginSessionCheck(){
    session_start();
    if(!empty($_SESSION['username']) AND !empty($_SESSION['name'])){
        echo "<script>alert('Anda sudah login');window.location='$_SERVER[PHP_SELF]?u=home';</script>";
        exit;
    }
}

// Fungsi Periksa Session
function SessionCheck(){
    session_start();
    if(empty($_SESSION['username']) AND empty($_SESSION['role'])){
        echo "<script>alert('Session telah habis. silahkan login kembali.');
        window.location='$_SERVER[PHP_SELF]?u=login'</script>";
        exit;
    }
}

// Logout
function Logout(){
    session_start();
    session_destroy();
    echo "<script>alert('Logout berhasil');window.location='$_SERVER[PHP_SELF]?u=login';</script>";
    exit;
}


// =========================
// Group Function
// =========================

// Fungsi Tambah Group
function tambahKelompok($name, $description){
    include "Database.php";

    // Masukkan data ke database
    $created_at = date('Y-m-d H:i:s');
    $query_insert = mysqli_query($conn, "INSERT INTO groups (name, description) VALUES ('$name', '$description')");
    if (!$query_insert) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>window.location='$_SERVER[PHP_SELF]?u=data-kelompok';</script>";
        exit;
    }
}

// Fungsi Ambil Data Group
function getDataKelompok(){
    include "Database.php";
    $result = mysqli_query($conn, "SELECT * FROM groups");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $array = [];
    while ($group = mysqli_fetch_array($result)) {
        $array[] = $group;
    }
    return $array;
}

// Fungsi Edit Group
function editKelompok($id, $name, $description) {
    include "Database.php";
    $query = mysqli_prepare($conn, "UPDATE groups SET name=?, description=? WHERE id=?");
    mysqli_stmt_bind_param($query, 'ssi', $name, $description, $id);
    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);
    mysqli_close($conn);
    echo "<script>window.location='$_SERVER[PHP_SELF]?u=data-kelompok';</script>";
    exit;
}

// Fungsi Hapus Group
function hapusKelompok($id){
    include "Database.php";
    $query = mysqli_query($conn, "DELETE FROM groups WHERE id='$id'");
    if (!$query) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Berhasil dihapus');window.location='$_SERVER[PHP_SELF]?u=data-kelompok';</script>";
        exit;
    }
}

// Fungsi Hitung Jumlah Baris Group
function countRowsKelompok(){
    include "Database.php";
    $result = mysqli_query($conn, "SELECT COUNT(*) AS total_rows FROM groups");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result);
    return $row['total_rows'];
}

// =========================
// Participant Functions
// =========================

// Fungsi Tambah Peserta
function tambahPeserta($user_id, $group_id, $join_date, $status){
    include "Database.php";

    // Masukkan data ke database
    $query_insert = mysqli_query($conn, "INSERT INTO participants (user_id, group_id, join_date, status) VALUES ('$user_id', '$group_id', '$join_date', '$status')");
    if (!$query_insert) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>window.location='$_SERVER[PHP_SELF]?u=data-peserta';</script>";
        exit;
    }
}

// Fungsi Ambil Data Peserta
function getDataPeserta(){
    include "Database.php";
    $result = mysqli_query($conn, "SELECT * FROM participants");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $array = [];
    while ($participant = mysqli_fetch_array($result)) {
        $array[] = $participant;
    }
    return $array;
}

// Fungsi Edit Peserta
function editPeserta($id, $user_id, $group_id, $join_date, $status) {
    include "Database.php";
    $query = mysqli_prepare($conn, "UPDATE participants SET user_id=?, group_id=?, join_date=?, status=? WHERE id=?");
    mysqli_stmt_bind_param($query, 'iissi', $user_id, $group_id, $join_date, $status, $id);
    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);
    mysqli_close($conn);
    echo "<script>window.location='$_SERVER[PHP_SELF]?u=data-peserta';</script>";
    exit;
}

// Fungsi Hapus Peserta
function hapusPeserta($id){
    include "Database.php";
    $query = mysqli_query($conn, "DELETE FROM participants WHERE id='$id'");
    if (!$query) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Berhasil dihapus');window.location='$_SERVER[PHP_SELF]?u=data-peserta';</script>";
        exit;
    }
}

// Fungsi Hitung Jumlah Baris Peserta
function countRowsPeserta(){
    include "Database.php";
    $result = mysqli_query($conn, "SELECT COUNT(*) AS total_rows FROM participants");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result);
    return $row['total_rows'];
}


// =========================
// User Functions
// =========================

// Fungsi Tambah Pengguna
function tambahPengguna($name, $username, $password, $email, $phone){
    include "Database.php";

    // Enkripsi password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Masukkan data ke database
    $created_at = date('Y-m-d H:i:s');
    $query_insert = mysqli_query($conn, "INSERT INTO users (name, username, password, email, phone, created_at) VALUES ('$name', '$username', '$hashed_password', '$email', '$phone', '$created_at')");
    if (!$query_insert) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>window.location='$_SERVER[PHP_SELF]?u=data-pengguna';</script>";
        exit;
    }
}

// Fungsi Ambil Data Pengguna
function getDataPengguna(){
    include "Database.php";
    $result = mysqli_query($conn, "SELECT * FROM users");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $array = [];
    while ($user = mysqli_fetch_array($result)) {
        $array[] = $user;
    }
    return $array;
}

// Fungsi Edit Pengguna
function editPengguna($id, $name, $username, $password, $email, $phone) {
    include "Database.php";

    // Enkripsi password jika diberikan
    if(!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $query = mysqli_prepare($conn, "UPDATE users SET name=?, username=?, password=?, email=?, phone=? WHERE id=?");
        mysqli_stmt_bind_param($query, 'sssssi', $name, $username, $hashed_password, $email, $phone, $id);
    } else {
        $query = mysqli_prepare($conn, "UPDATE users SET name=?, username=?, email=?, phone=? WHERE id=?");
        mysqli_stmt_bind_param($query, 'ssssi', $name, $username, $email, $phone, $id);
    }

    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);
    mysqli_close($conn);
    echo "<script>window.location='$_SERVER[PHP_SELF]?u=data-pengguna';</script>";
    exit;
}

// Fungsi Hapus Pengguna
function hapusPengguna($id){
    include "Database.php";
    $query = mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
    if (!$query) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Berhasil dihapus');window.location='$_SERVER[PHP_SELF]?u=data-pengguna';</script>";
        exit;
    }
}

// Fungsi Hitung Jumlah Baris Pengguna
function countRowsPengguna(){
    include "Database.php";
    $result = mysqli_query($conn, "SELECT COUNT(*) AS total_rows FROM users");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result);
    return $row['total_rows'];
}



// =========================
// Satuan Function
// =========================

// Fungsi Tambah Satuan
function tambahSatuan($satuan_name){
    include "Database.php";

    // Masukkan data ke database
    $query_insert = mysqli_query($conn, "INSERT INTO satuan (satuan_name) VALUES ('$satuan_name')");
    if (!$query_insert) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>window.location='$_SERVER[PHP_SELF]?u=satuan';</script>";
        exit;
    }
}

// Fungsi Ambil Data Satuan
function getDataSatuan(){
    include "Database.php";
    $result = mysqli_query($conn, "SELECT * FROM satuan");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $array = [];
    while ($satuan = mysqli_fetch_array($result)) {
        $array[] = $satuan;
    }
    return $array;
}

// Fungsi Edit Satuan
function editSatuan($satuan_id, $satuan_name) {
    include "Database.php";
    $query = mysqli_prepare($conn, "UPDATE satuan SET satuan_name=? WHERE satuan_id=?");
    mysqli_stmt_bind_param($query, 'si', $satuan_name, $satuan_id);
    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);
    mysqli_close($conn);
    echo "<script>alert('Sukses diupdate.');window.location='$_SERVER[PHP_SELF]?u=satuan';</script>";
    exit;
}

// Fungsi Hapus Satuan
function hapusSatuan($satuan_id){
    include "Database.php";
    $query = mysqli_query($conn, "DELETE FROM satuan WHERE satuan_id='$satuan_id'");
    if (!$query) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data berhasil dihapus.');window.location='$_SERVER[PHP_SELF]?u=satuan';</script>";
        exit;
    }
}

// Fungsi Hitung Jumlah Baris Satuan
function countRowsSatuan(){
    include "Database.php";
    $result = mysqli_query($conn, "SELECT COUNT(*) AS total_rows FROM satuan");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result);
    return $row['total_rows'];
}

// =========================
// Material Function
// =========================

// Fungsi Tambah Material
function tambahMaterial($material_name, $satuan_id, $stock) {
    include "Database.php";

    // Masukkan data ke database
    $query_insert = mysqli_query($conn, "INSERT INTO material (material_name, satuan_id, stock) VALUES ('$material_name', '$satuan_id', '$stock')");
    if (!$query_insert) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>window.location='$_SERVER[PHP_SELF]?u=material';</script>";
        exit;
    }
}

// Fungsi Ambil Data Material
function getDataMaterial() {
    include "Database.php";
    $result = mysqli_query($conn, "SELECT * FROM material");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $array = [];
    while ($material = mysqli_fetch_array($result)) {
        $array[] = $material;
    }
    return $array;
}

// Fungsi Edit Material
function editMaterial($material_id, $material_name, $satuan_id, $stock, $created_at) {
    include "Database.php";
    $query = mysqli_prepare($conn, "UPDATE material SET material_name=?, satuan_id=?, stock=?, created_at=? WHERE material_id=?");
    mysqli_stmt_bind_param($query, 'siiis', $material_name, $satuan_id, $stock, $created_at, $material_id);
    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);
    mysqli_close($conn);
    echo "<script>alert('Sukses diupdate.');window.location='$_SERVER[PHP_SELF]?u=material';</script>";
    exit;
}

// Fungsi Hapus Material
function hapusMaterial($material_id) {
    include "Database.php";
    $query = mysqli_query($conn, "DELETE FROM material WHERE material_id='$material_id'");
    if (!$query) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data berhasil dihapus.');window.location='$_SERVER[PHP_SELF]?u=material';</script>";
        exit;
    }
}

// Fungsi Hitung Jumlah Baris Material
function countRowsMaterial() {
    include "Database.php";
    $result = mysqli_query($conn, "SELECT COUNT(*) AS total_rows FROM material");
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result);
    return $row['total_rows'];
}



?>
