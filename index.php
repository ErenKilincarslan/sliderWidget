<!DOCTYPE HTML>

<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Upload</title>

    <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <script type="text/javascript" src="upload.js"></script>
    <link href="upload.css" type="text/css" rel="stylesheet">

</head>
<body>
<div id="aciklama">
    <h1>Upload Ekranı</h1><hr>
    <h2>Yuklemek istediginiz ".png" uzantılı resimleri lütfen ekleyiniz.</h2>
</div>
<div id="index">
    <div class="ana" id="i">
        <button class="arti"><img src="image/plus.png" style="width:75px; height=75px; float: left;" />Alan Ekle<img src="image/plus.png" style="width:75px; height=75px; float: right; " /></button>
        <!--  Target vermeyi unutmaayın.Veriyi ajaxla yollar sonuçları belirlediğimiz iframeye yollar. -->
        <form action="upload.php" method="post" enctype="multipart/form-data" id="yukle" target="iframe">
            <div class="iler">
                <div class="i_ana"> <input id="dosya" type="file" name="resim[]" />    <div class="eksi">Alanı Kaldır</div>   </div>
            </div>
            <input id="yukleButon" type="submit" class="buton" value="Yükle">
        </form>
    </div>
    
    <div class="ana" id="i" name="sonuc">
    </div>
    <div id="slaytButon">
        <iframe src="" frameborder="0" id="iframe" name="iframe"></iframe>

        <a href="slider.php"><button id="butonSlayt"><img src="image/play.png" style="width:75px; height=75px; float: left; " />Slayt Yap<img src="image/play.png" style="width:75px; height=75px; float: right; " /></button></a>
    </div>
</div>
</body>
</html>