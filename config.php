<?php

// echo '<br/>'.__FILE__.' #'.__LINE__;

$vv['shop_view'] = 'table';

require DR.'/vendor/didrive/base/template/preloader4/input.php';

// echo __FILE__;

$vv['insert-in-head'] = [];

$vv['insert-in-head']['og:url'] = '<meta property="og:url" content="http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'" />';
$vv['insert-in-head']['og:description'] = '<meta property="og:description" content=\'Сервисная компьютерная компания "Партнер" \' />';
        