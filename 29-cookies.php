<?php
// COOKIE
setcookie('user', 'Carlos Eduardo', time()+3600);
setcookie('email', 'caduamorim13@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);
