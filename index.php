<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="UTF-8">
    <title>欢迎来到商科院</title>
    <link rel="stylesheet" type="text/css" href="css/zhwuyuhehe.css">
    <link rel="stylesheet" type="text/css" href="css/top_menu.css">
</head>
<body>
<?php
if (isset($_COOKIE['user_login']))
    require 'top_menu.php';
?>
<a href="index.php" title="返回首页"><img src="img/logo.png" alt="logo"></a>
<div class="zheadingWrapper">
    <a href="login.php" class="zheader zheader--pushDown zheader--shadow" title="点击进入登录页面">欢迎来到zhwuyuhehe</a>
</div>
<h3><?php require 'functions/population_function.php';
    new total(); ?></h3>
</body>