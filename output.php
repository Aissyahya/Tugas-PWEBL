<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = htmlspecialchars($_POST["nim"]);
    $nama = htmlspecialchars($_POST["nama"]);
    echo "Hello, $nim $nama!";
}
?>
