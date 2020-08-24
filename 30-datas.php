<?php
// Datas
date_default_timezone_set('America/Araguaina');
echo date('d-m-Y H:i:s');

echo "<hr>";

// TIME
$time = time();
echo date('d/m/Y',$time);
echo "<hr>";

// MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023); 
echo date('d/m - h:i', $data_pagamento);
echo "<hr>";

// STRTOTIME
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y h:i', $data);