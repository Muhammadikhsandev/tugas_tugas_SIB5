<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Jenis_produk.php';
include_once 'models/kartu.php';
include_once 'models/produk.php';
$sesi = $_SESSION['MEMBER'];
if (isset($sesi)) {

    include_once 'top.php';
    include_once 'menu.php';

?>

    <div>
        <div class="container-fluid px -4">
            <!-- <h1>Selamat datang di halaman admin</h1> -->

            <?php
            $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
            if ($url == 'dashboard') {
                include_once 'dashboard.php';
            } else if (!empty($url)) {
                include_once '' . $url . '.php';
            } else {
                include_once 'dashboard.php';
            }
            ?>
        </div>
    </div>
    <!-- <div>
        <div class="container-fluid px-4">
            <h1>Selamat datang di halaman admin</h1> -->

    <?php
    $url = !isset($_GET['url']) ? 'About' : $_GET['url'];
    if ($url == 'About') {
        include_once 'about.php';
    } else if (!empty($url)) {
        include_once '' . $url . '.php';
    } else {
        include_once 'about.php';
    }
    ?>
    </div>
    </div>
    <div>
        <div class="container-fluid px-4">
            <!-- <h1>Selamat datang di halaman admin</h1> -->

            <?php
            $url = !isset($_GET['url']) ? 'Contact' : $_GET['url'];
            if ($url == 'Contact') {
                include_once 'contact.php';
            } else if (!empty($url)) {
                include_once '' . $url . '.php';
            } else {
                include_once 'contact.php';
            }
            ?>
        </div>
    </div>
    <div>
        <div class="container-fluid px-4">
            <!-- <h1>Selamat datang di halaman admin</h1> -->

            <?php
            $url = !isset($_GET['url']) ? 'Tables' : $_GET['url'];
            if ($url == 'Tables') {
                include_once 'tables.php';
            } else if (!empty($url)) {
                include_once '' . $url . '.php';
            } else {
                include_once 'tables.php';
            }
            ?>
        </div>
    </div>
<?php

    include_once 'button.php';
} else {
    echo '<script>alert("anda tidak boleh masuk");history.back();</script>';
}
?>