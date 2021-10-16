<?php
session_start();

if(isset($_SESSION['username'])){
    header("location: welcome.php");
include_once("home.html");
include_once("materi.html");
include_once("soal.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="img/857229755585658880.png">
    <title>Website Berfisika-ria</title>
</head>
<body>
    <div class="container">
        <!--awal header-->
        <header>
            <a href="#" class="logo"><span>Berfisika-</span>Ria</a>
            <div id="menu" class="fas fa-bars"></div>
            <nav class="navbar">
                <a href="home.html">home</a>
                <a href="materi.html">materi</a>
                <a href="soal.html">soal</a>
            </nav>
        </header>
        <!--akhir header-->

        <!--awal home section-->
        <section class="home">
            <div class="content">
                <h3>Tempat terbaik untuk belajar Fisika</h3>
            </div>
            <div class="image">
                <img src="img/fisika-kuantum-ilustrasi.jpg" alt="home">
            </div>
        </section>
        <!--akhir home section-->

        <!--awal footer section-->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>about us</h3>
                    <p>tersedia materi-materi yang sangat mudah dipahami dan menarik.</p>
                </div>
                <div class="box">
                    <h3>follow us</h3>
                    <a href="https://www.facebook.com/siapaaja">facebook</a>
                    <a href="https://www.twitter.com/siapaaja">twitter</a>
                    <a href="https://www.instagram.com/siapaaja/">instagram</a>
                    <a href="https://www.linkedin.com/siapaaja">linkedin</a>
                </div>
                <div class="box">
                    <h3>contact us</h3>
                    <p><i class="fas fa-phone"></i>+62 833768135</p>
                    <p><i class="fas fa-envelope"></i>perantarapengajar@study.com</p>
                    <p><i class="fas fa-map-marker-alt"></i>Di mana saja, Jawa Selatan, Indonesia</p>
                </div>
            </div>
        </section>
        <!--akhir footer section-->
    </div>
    <script src="js/script.js"></script>
</body>
</html>
