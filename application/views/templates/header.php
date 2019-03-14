    <?php
        if($this->uri->segment(1) == 'es'){
            $lang = 'es';
        }elseif($this->uri->segment(1) == 'en') {
            $lang = 'en';
        }else {
            $lang = false;
        }

    ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>CodigoUB</title>
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('css/custom.css')?>">
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
       
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto text-center" href="<?php if($lang == 'es') { echo base_url('es'); } elseif($lang == 'en') { echo base_url('en'); } else { echo base_url('');} ?>">
        <img id="logo" class="img-fluid" src="<?php echo base_url('img/logocodigoub.png'); ?>" />

        </a>
        <!-- the collapse burger for the mobile part  -->
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button> -->
    </div>
    <div class="navbar w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto" style="display: -webkit-inline-box">
        <li class="nav-item">
                <a href="<?php echo base_url() ?>en" class="navlink">
                    <img class="flags" src="<?php echo base_url('img/001-united-states.png'); ?>" />
                </a>
            </li>
            <li class="nav-item" style="margin-left: 5px">
                <a class="navlink" href="<?php echo base_url()?>es">
                    <img  class="flags" src="<?php echo base_url('img/002-spain.png'); ?>" />
                </a>
            </li>
        </ul>
    </div>
</nav>


