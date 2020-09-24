<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title><?= $title; ?></title>

    <style>
        .bg {
            background-color: #f1f1f1;
        }

        section {
            min-height: 563px;
        }

        h1 {
            color: #2b5dad;
        }

        .bg-gradient-blue {
            background-color: #9ba5d9;
            background-image: -webkit-gradient(linear, left, right, color-stop(10%, #9ba5d9), to(#95e0e7));
            background-image: linear-gradient(to right, #9ba5d9 10%, #95e0e7 100%);
            background-size: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-blue">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Vigenere Cipher</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link <?= $enkripsi; ?>" href="<?= base_url('home/encryptpage'); ?>">Encrypt</a>
                    <a class="nav-item nav-link <?= $dekripsi; ?>" href="<?= base_url('home/decryptpage'); ?>">Decrypt</a>
                </div>
            </div>
        </div>
    </nav>