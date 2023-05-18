<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Kullanıcı adı ve şifre alanlarının boş geçilmemesini kontrol etme
    if (empty($email) || empty($password)) {
        header("Location: Giriş.html"); // Kullanıcıyı login sayfasına yönlendirme
        exit();
    }

    // Kullanıcı adının mail adresi olup olmadığını kontrol etme
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: Giriş.html"); // Kullanıcıyı login sayfasına yönlendirme
        exit();
    }

    // Login işlemi başarılıysa
    header("Location: hoşgeldinmesajı.php?email=" . urlencode($email));
    exit();
}
?>