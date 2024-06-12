<?php
// Semua Alur diatur disini
include "Function.php";

// ======================
// GET Method Routing
// ======================
if(isset($_GET['u'])){
    // View Login
    if($_GET['u']=='login'){
        LoginSessionCheck();
        include "../view/login.php";
    } 
    // Logout
    if($_GET['u']=='logout'){
       Logout();
    } 
    // View Home
    else if($_GET['u']=='home'){
        SessionCheck();
        include "../view/home.php";
    } 
    // View Customers
    else if($_GET['u']=='customers'){
        SessionCheck();
        include "../view/customers.php";
    } 
    // View Satuan
    else if($_GET['u']=='satuan'){
        SessionCheck();
        include "../view/satuan.php";
    }
    // Hapus Satuan 
    else if($_GET['u']=='hapus-satuan'){
        SessionCheck();
        $id=$_GET['id'];
        hapusSatuan($id);
    }
    // View Material
    else if($_GET['u']=='material'){
        SessionCheck();
        include "../view/material.php";
    }
    // Hapus Material 
    else if ($_GET['u'] == 'hapus-material') {
        SessionCheck();
        $material_id = $_GET['id'];
        hapusMaterial($material_id);
    }

    // Invalid Link
    else {
        echo "<h1 class='text-center'>Maaf fitur belum ada / sedang dimaintenance.</h1>";
    }
}else{
    LoginSessionCheck();
    include "../view/login.php";
}
// ======================
// POST Method untuk Form
// ======================
// Login Handler
if(isset($_POST['login-admin'])){
    include "Database.php";
    $username=mysqli_real_escape_string($conn, $_POST['username']);
    $password=mysqli_real_escape_string($conn, $_POST['password']);
    LoginAdmin($username, $password);
}
// Tambah Customer Handler
if(isset($_POST['tambah-customer'])) {
    include "Database.php";
    $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $customer_address = mysqli_real_escape_string($conn, $_POST['customer_address']);
    $customer_phone = mysqli_real_escape_string($conn, $_POST['customer_phone']);
    tambahCustomer($customer_name, $customer_address, $customer_phone);
} 
// Tambah Satuan Handler
if(isset($_POST['tambah-satuan'])) {
    include "Database.php";
    $satuan_name = mysqli_real_escape_string($conn, $_POST['satuan_name']);
    tambahSatuan($satuan_name);
}
// Edit Satuan Handler
if(isset($_POST['edit-satuan'])) {
    include "Database.php";
    $satuan_id = mysqli_real_escape_string($conn, $_POST['satuan_id']);
    $satuan_name = mysqli_real_escape_string($conn, $_POST['satuan_name']);
    editSatuan($satuan_id,$satuan_name);
}

// Tambah Material Handler
if (isset($_POST['tambah-material'])) {
    include "Database.php";
    $material_name = mysqli_real_escape_string($conn, $_POST['material_name']);
    $satuan_id = mysqli_real_escape_string($conn, $_POST['satuan_id']);
    $stock = mysqli_real_escape_string($conn, $_POST['stock']);
    tambahMaterial($material_name, $satuan_id, $stock);
}

// Edit Material Handler
if (isset($_POST['edit-material'])) {
    include "Database.php";
    $material_id = mysqli_real_escape_string($conn, $_POST['material_id']);
    $material_name = mysqli_real_escape_string($conn, $_POST['material_name']);
    $satuan_id = mysqli_real_escape_string($conn, $_POST['satuan_id']);
    $stock = mysqli_real_escape_string($conn, $_POST['stock']);
    $created_at = mysqli_real_escape_string($conn, $_POST['created_at']);
    editMaterial($material_id, $material_name, $satuan_id, $stock, $created_at);
}
?>