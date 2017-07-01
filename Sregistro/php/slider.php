<!DOCTYPE HTML PUBLIC >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="es ES">
<head>
    <title></title>
    <link rel="stylesheet" href="./css/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./css/nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="./img/imagenes/php.png" data-thumb="./img/imagenes/php.png" alt="" width="200" height="156"  />
                <img src="./img/imagenes/html.png" data-thumb="./img/imagenes/html.png" alt="" width="200" height="156"/>
                <img src="./img/imagenes/css3.png" data-thumb="./img/imagenes/css3.png" alt="" data-transition="slideInLeft" width="200" height="156" />
                <img src="./img/imagenes/mysql.jpg" data-thumb="./img/imagenes/mysql.jpg" alt="" title="#htmlcaption"  width="200" height="156"/>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="./js/jquery-latest.js"></script>
    <script type="text/javascript" src="./js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>