
<!DOCTYPE html>
<html>
<head>
    <title>Giriş Sayfası</title>
</head>
<body>
    <?php
    if (isset($_GET["email"])) {
        $email = $_GET["email"];
        echo "<h1ld>Hoşgeiniz $email! giriş işlemi başarılıdır.</h1>";
        // İleri bir sayfaya yönlendirme yapabilirsiniz
    }
    ?>
    
    <h1>Ana sayfaya dön</h1>
    <a href="index.html">Ana sayfa</a>
</body>
</html>