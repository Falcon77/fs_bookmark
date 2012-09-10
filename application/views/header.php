<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
    
    <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
        
    
    <!-- css:Reset For now will include in the default.css file -->
    <!-- <link rel="stylesheet" href="reset.css" type="text/css" /> -->
    <!-- css:Default -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/default.css" type="text/css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/start/jquery-ui.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/custom.js"></script>
    
</head>
<body class="">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
<!-- start:Wrap -->
<div id="wrap">
    
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">StartHo.me</a>
            <div class="nav-collapse collapse">
                <?php echo form_open('login/run',array('id' => 'login_form', 'class' => 'navbar-form pull-right')); ?>
                    <?php echo form_input(array('name' => 'email', 'id' => 'email', 'class' => 'span2', 'tabindex' => '1', 'placeholder' => 'Email')); ?>
                    <?php echo form_password(array('name' => 'pass', 'id' => 'pass', 'class' => 'span2', 'tabindex' => '2', 'placeholder' => 'Password')); ?>
                    <?php echo form_submit(array('class' => 'btn', 'value' => 'Log in', 'id' => 'ulheader', 'tabindex' => '4')); ?>
                    <div class="controls controls-row">
                        <label class="checkbox">
                            <input type="checkbox"> Keep me logged in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#">Forgot your password?</a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

     
<!-- start:Header -->
<!div id="header">

<!/div>

<!-- start:Content -->
<div id="content">
