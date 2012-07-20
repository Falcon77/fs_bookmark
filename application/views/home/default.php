

<h1>Show this page when not logged in.</h1>

<?php echo form_open(''); ?><br />
Login:<?php echo form_input('login', ''); ?><br />
Password:<?php echo form_input('password', ''); ?><br />
Email:<?php echo form_input('email', ''); ?><br />
<?php echo form_submit('submit', 'submit'); ?><br />
<?php echo form_close(); ?>