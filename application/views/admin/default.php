<h1>Create User</h1>

<?php echo form_open('admin/createUser'); ?><br/>
<?php echo form_input('login', ''); ?><br/>
<?php echo form_input('password', ''); ?><br/>
<?php echo form_input('email', ''); ?><br/>
<?php echo form_submit('submit', 'submit'); ?><br/>
<?php echo form_close(); ?>


