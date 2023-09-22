<form method="POST">
    <label for="">Username</label> <br>
    <input type="text" name="username" ><br />
    <label for="">Password</label> <br>
    <input type="password" name="pass"><br />
    <input type="submit" name="login" value="Login" id="" />
</form>

<?php
//memproses form
$username = $_POST['username'];
$password = $_POST['pass'];
//tampilkan data jika sudah diproses
$login = $_POST['login'];
if (isset($login)) {
    echo 'Hello ' . $username . '<br> password Anda ' . $password;
}

?>