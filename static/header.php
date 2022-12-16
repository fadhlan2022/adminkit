<!DOCTYPE html>
<html lang="en">
<?php
date_default_timezone_set('Asia/Jakarta');
function formatTanggal($date)
{
    return date('d-m-Y', strtotime($date));
}
function formatTanggal2($date)
{
    return date('d-m-Y H:i:s', strtotime($date));
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Data Store</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.php">
                    <span class=" align-middle">Perhitungan</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        MENU
                    </li>

                    <li class="sidebar-item  <?php if ($title == 'dashboard') {
                        echo 'active';} ?>">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php if ($title == 'hitung_luas') {
                        echo 'active';} ?>">
                        <a class="sidebar-link" href="hitung_luas.php">
                            <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Perhitungan Luas</span>
                        </a>
                    </li>
                    <br><br><br><br>
                </ul>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
            </nav>
            <main class="content">
                <div class="container-fluid p-0">

