<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rólam</title>
        <link href="./css/rolam.css" rel="stylesheet">
    </head>

    <body>

        <nav class="fejlec">
            <a class="menupont" href="./gabxway.atw.hu">Rólam</a>
            <a class="menupont" href="#">Kapcsolat</a>
            <a class="menupont" href="#">Termékeink</a>
        </nav>
        <video id="background-video" autoplay loop muted loop src="./images/csillag.mp4"></video>
        <section class="intro">
            Üdvözlöm!<br> Ez az önéletrajzi oldalam....
        </section>
        <section class="logo">
            <img src="./images/logo.png" alt="THIS IS THE WAY">
        </section>
        <div id="scroller">
            <div id="content">
                <p id="title">ÖNÉLETRAJZ</p>

                <p id="subtitle">Név: Horváth Gábor</p>

                <p id="subtitle">Telefonszám: +36 (30) 451 8602</p>

                <p id="subtitle">E-mail: agandgakft@gmail.com</p>

                <p id="subtitle">Személyes adatok:</p>

                <p>Születési hely, idő: Budapest, 1971. 09. 07</p>
                <p>Állampolgárság: magyar</p>
                <p id="subtitle">Iskolák, képzettségek:</p>
                <p> 24.Sz. Killián György Szakközép iskola Villanyszerelő szak</p>
                <p> Kvalikon Művezető képzés</p>
                <p> Bolyai János Műszaki szakiskola Elektronikai Műszerész</p>
                <p> BME Android/ Java / Kotlin szoftverfejlesztő</p>
                <p> BME Python szoftverfejleszt</p>
                <br>
                <p id="subtitle">Munkatapasztalat:</p>
                <p>Villanyszerelési munkálatok Elektronikai javítások Számítógép és mobil telefon szervizelés Színházi
                    világítás Kávégépek javítása</p>
                <p>ipari rendszerek programozása (PLC, Ipari robot fejlesztés)</p>
                <p>Elektromos Hajó PMD program fejlesztés Egyedi jármű műszerek fejlesztése (Hajózás: Digital dashboard
                    gauge)</p>
                <p>Benzines és elektromos kisgépek szervizelése </p>
                <p id="subtitle">Számítógépes ismeretek:</p>
                <p>Haladó szintű felhasználás (Word, Ecxel, Internet, Power Point, Webszerkesztők Senior java, Html, Css,
                    Javascript, Angular, Php, Mysql,Xilinx, Esp32,Arduion, Raspberry Py: C , Python), C#;</p>
                <p>Kezdő szintű Python Programozás; </p>
                <p id="subtitle">Egyéb:</p>
                <p>“B” kategóriás jogosítvány</p>
                <p id="subtitle">Hobbi:</p>
                <p>Elektronika, Tanulás: ( Programozási nyelvek elsajátítása új technológiák megismerése)</p>
                <p id="subtitle">Motivál:</p>
                <p>Értékteremtés, Meglévő és új dolgok fejlesztése</p>

            </div>

        </div>
        <script src="init.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: index.php");
    exit();
}
?>