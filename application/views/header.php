<!doctype html>
<html>
<head>
    
    <title><?php echo $title; ?></title>
    
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

<!--
    <div>
        <table cellspacing="0" border="1">
            <tr>
                <td class="html7magic"><label for="email">Email or Phone</label></td>
                <td class="html7magic"><label for="pass">Password</label></td>
            </tr>
            <tr>
                <td><input type="text" class="inputtext" name="email" id="email" value="" tabindex="1" /></td>
                <td><input type="password" class="inputtext" name="pass" id="pass" tabindex="2" /></td>
                <td><label class="uiButton uiButtonConfirm" id="loginbutton" for="ulrj4m_4">
                        <input value="Log In" tabindex="4" type="submit" id="ulrj4m_4" />
                    </label>
                </td>
            </tr>
            <tr>
                <td class="login_form_label_field"><div class="uiInputLabel clearfix">
                        <input id="persist_box" type="checkbox" name="persistent" value="1" checked="1" class="uiInputLabelCheckbox" />
                        <label for="persist_box">Keep me logged in</label></div>
                    <input type="hidden" name="default_persistent" value="1" />
                </td>
                <td class="login_form_label_field">
                    <a rel="nofollow" href="">Forgot your password?</a>
                </td>
            </tr>
        </table>
    </div>
-->
<!-- start:Content -->
<div id="content">
