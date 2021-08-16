<?php

$smarty = new Template();

$smarty->assign('BANNER', Routes::ImageLink('banner.jpg', 750, 230));

$smarty->display('home.tpl');



include_once Routes::getFolderController(). '/products.php';

?>