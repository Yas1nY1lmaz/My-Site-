<?php
include 'class.php';
$url = "https://www.tff.org/Default.aspx?pageId=198&kulupID=51";

$html = str_get_html(file_get_contents($url));

$data = $html->find('.s-table');
?>


<?php
foreach($data as $datacek){
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yazı Boyutunu Değiştirme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        p {
            font-size: 20px; /* Yazı boyutunu 20 piksel olarak ayarla */
        }
        header {
            background-color: #ababab; /* Arkaplan rengi */
            color: #fff; /* Metin rengi */
            padding: 40px; /* İçerikle arasındaki boşluk */
        }

        /* Logo stili */
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #dedede; /* Örnek olarak pembe bir renk */
            /* Diğer stillendirmeler */
            
        }
        /* Menü öğeleri */
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .centered-text {
            text-align: center; /* Metni yatayda merkez hizalama */
        }
        .buyuk-font {
    font-size: 24px; /* Font büyüklüğünü belirle */
        }
.container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        /* Medya sorguları */
        @media screen and (max-width: 600px) {
            .container {
                width: 80%;
            }
            h1 {
                font-size: 24px;
            }
        }

        .slider {
    width: 740px; /* Slider genişliği */
    height: 400px; /* Slider yüksekliği */
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto; /* Merkeze hizalama */
  }
  .slide {
    display: none;
  }

  .active {
    display: block;
  }

  .slide img {
    max-width: 100%;
    max-height: 100%;
  }
        .btn-custom {
    background-color: #ffffff; /* Arka plan rengi */
         }
         .btn-custom1 {
    background-color: #ffffff; /* Arka plan rengi */
         }.btn-custom2 {
    background-color: #ffffff; /* Arka plan rengi */
         }
         .alert-primary {
    background-color: #969696; /* Arka plan rengi */
    color: #fff; /* Yazı rengi */
    font-size: 34px;
    border-color: #969696; /* Kenarlık rengi */
         }
    </style>
</head>
<body>
<div class="container">
        <div class="alert alert-primary" role="alert">
            Yasin Yılmaz
        </div>
        <button id="Anasayfa" type="button" class="btn btn-custom2">Ana Sayfa</button>
        <button id="Sehrim" type="button" class="btn btn-custom1">Şehrim</button>
        <button id="Skor" type="button" class="btn btn-custom">Canlı Puan Durumu</button>
    </div>
    <br><br>
    <p>Trendyol Süper Lig</p>
</body>
<script>        document.getElementById("Anasayfa").addEventListener("click", function() {
          // Yönlendirme işlemi
          window.location.href = "Main.php";
        });
        document.getElementById("Sehrim").addEventListener("click", function() {
          // Yönlendirme işlemi
          window.location.href = "Şehrim.html";
        });
        document.getElementById("Skor").addEventListener("click", function() {
          // Yönlendirme işlemi
          window.location.href = "index.php";
        });</script>
</html>
<?php echo $datacek->find(".griBG2",0)->plaintext;  ?><br>
<?php echo $datacek->find(".griBG",1)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",9)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",10)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",18)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",19)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",27)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",28)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",36)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",37)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",45)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",46)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",54)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",55)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",63)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",64)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",72)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",73)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",81)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",82)->plaintext; ?><br>


<?php
}
?>