<?php
    session_start();
    $dimensions = array();
    $dimensions = $_SESSION['dimensions'];
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html" charset="UTF-8">
    <title>Slider Page</title>
    <script type="text/javascript">var widthLi = "<?=$dimensions[0]?>";</script>
    <script src="https://code.jquery.com/jquery-3.1.0.js" type="text/javascript"></script>
    <script type="text/javascript" src="slider.js"></script>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<div <?php echo 'style="width : '.$dimensions[0].'px;"'; ?> id="slider">
    <div class="slider" <?php echo ' style ="width : '.$dimensions[0] .'px; height : '.$dimensions[1] .'px;"'; ?> >
        <ul>
        <?php
        $resimler = array();
        $resimler = $_SESSION['resimler'];
        $array_lenght = count($resimler);
    for($i=0;$i<$array_lenght;$i++) {
        echo '<li><img style="width: '.$dimensions[0].'px; height: '.$dimensions[1].'px;"  src='.$resimler[$i].'></li>';
    }
?>
        </ul>
    </div>
    <div class="sliderButton">
        <a href="#" class="previous">Previous</a>
        <a href="#" class="next">Next</a>
    </div>
</div>
</body>
</html>