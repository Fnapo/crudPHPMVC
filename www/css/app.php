<?php
header("Content-type: text/css; charset: UTF-8");
?>

@font-face {
font-family: Kings;
src: url("../fonts/KingsguardCalligraphy.otf");
}

@font-face {
font-family: OldLondon;
src: url("../fonts/OldLondon.ttf");
}

html {
font-size: min(2.5vmin, 15px) !important;
}

header {
height: 10vh;
font-family: Kings, Roboto, "Helvetica Neue";
font-weight:bold;
background-image: url("../img/bgKings.png");
}

main {
height: 85vh;
background-image: linear-gradient(rgb(137, 107, 165),
rgb(151, 121, 179),
rgb(179, 146, 211));
color: white;
}

footer {
height: 5vh;
font-family: OldLondon, Roboto, "Helvetica Neue";
font-weight:400;
background-image: url("../img/bgKings.png");
}

.alerta-bottom {
position: absolute;
bottom: 5vh;
}

<?php for ($altura = 0; $altura <= 100; $altura += 5) {
?>.altura-<?= $altura ?> {
height: <?= $altura ?>vh;
}

.altura-max-<?= $altura ?> {
max-height: <?= $altura ?>vh;
}

<?php
}

?>.bordes-1 {
border: 1px black solid;
}

img:not(.icono) {
width: 100%;
object-fit: contain;
}

img.icono {
height: 1.5rem;
}

.table td,
.table th {
vertical-align: middle;
}

.table td {
color: white;
}

.table .form-group {
margin-bottom: 0;
}

.normal {
color: antiquewhite;
background-color: rgb(138, 102, 172);
}

.inverso {
background-color: antiquewhite;
color: rgb(138, 102, 172);
}

.total404 {
height: 100vh;
background-color: rgb(19, 19, 83);
}

.sin-imagen{
background-image: none;
}