<?php
require_once('init.php');
$smarty = init();

$smarty->assign('var1','test_var');
$smarty->debugging = true;

$smarty->display('../html/index.tpl');