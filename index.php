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
<div class="ana" id="i">
    <div class="arti">Alan Ekle</div>
    <!--  Target vermeyi unutmaayın.Veriyi ajaxla yollar sonuçları belirlediğimiz iframeye yollar. -->
    <form action="upload.php" method="post" enctype="multipart/form-data" id="yukle" target="iframe">
        <div class="iler">
            <div class="i_ana"> <input type="file" name="resim[]" />    <div class="eksi">-</div>   </div>
        </div>
        <input type="submit" class="buton" value="Yükle" />
    </form>
</div>
    
<div class="ana" id="i" name="sonuc">
</div>
<div id="slaytButon">
<iframe src="" frameborder="0" id="iframe" name="iframe"></iframe>

<a href="slider.php"><input type="button" id="butonSlayt"  name="slaytButton" value="SLAYTI YAP ARTIK"></a>
</div>
</body>
</html>