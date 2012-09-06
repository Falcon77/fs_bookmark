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
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
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
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
<div class="navbar navbar-inverse navbar-fixed-top">Test
</div>
<!-- start:Wrap -->
<div id="wrap">
     
<!-- start:Header -->
<div id="header">
    <!-- login form -->
    <div align="right">
        <?php echo form_open('login/run',array('id' => 'login_form', 'class' => 'myFormClass')); ?>
        <table cellspacing="0" border="0">
            <tr>
                <td class="html7magic"><?php echo form_label('Email', 'email'); ?></td>
                <td class="html7magic"><?php echo form_label('Password', 'pass'); ?></td>
            </tr>
            <tr>
                <td><?php echo form_input(array('name' => 'email', 'id' => 'email', 'class' => 'inputtext', 'tabindex' => '1')); ?></td>
                <td><?php echo form_password(array('name' => 'pass', 'id' => 'pass', 'class' => 'inputtext', 'tabindex' => '2')); ?></td>
                <td><?php echo form_label(form_submit(array('value' => 'Log in', 'id' => 'ulheader', 'tabindex' => '4')),'ulheader', array('class' => 'uibutton', 'id' => 'loginbutton')); ?></td>
            </tr>
            <tr>
                <td class="login_form_label_field"><div class="uiInputLabel clearfix">
                        <?php echo form_checkbox(array('id' => 'persist_box', 'name' => 'persistent', 'value' => '1', 'checked' => 'true', 'class' => 'uiCheckbox')); ?>
                        <?php echo form_label('Keep me logged in', 'persist_box'); ?></div>
                        <?Php echo form_hidden('default_persistent', '1'); ?>
                </td>
                <td class="login_form_label_field">
                    <a rel="nofollow" href="">Forgot your password?</a>
                </td>
            </tr>
        </table>
        <?php echo form_close(); ?>
    </div>
    <!-- end login form -->
</div>

<!-- start:Content -->
<div id="content">
