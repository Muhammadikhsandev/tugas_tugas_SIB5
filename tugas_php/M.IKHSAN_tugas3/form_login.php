<?php

session_start();
// Fungsi untuk memeriksa login
function cekLogin($username, $password)
{
    // Ganti username dan password sesuai kebutuhan
    $adminUser = "admin";
    $adminPass = "mimin";

    if ($username === $adminUser && $password === $adminPass) {
        // Jika login berhasil, set session dan arahkan ke halaman admin.php
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit;
    } else {
        // Jika login gagal, tampilkan pesan error
        echo "Login gagal. Silakan coba lagi.";
    }
}

// Proses form login jika data dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Panggil fungsi cekLogin
    cekLogin($username, $password);
}
?>

<fieldset style="background-color: aquamarine;">
    <legend>Form Login</legend>
    <table>
        <thead>
            <tr>
                <th>Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="form_login.php">
                <tr>
                    <td>Username :</td>
                    <td>
                        <input type="text" name="username" id="username" required><br><br>
                    </td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td>
                        <input type="password" name="password" id="password" required><br><br>
                    </td>
                </tr>
        <tfoot>
            <tr>
            <th><button name="proses">Submit</button></th>
            </tr>
        </tfoot>
        </form>

        </tbody>
    </table>

</fieldset>