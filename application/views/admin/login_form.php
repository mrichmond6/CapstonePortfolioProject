<?php
//application/views/admin/login_form.php
$this->load->view('templates/header');

if (isset($logout_message)) {
   echo "<div class='message'>";
   echo $logout_message;
   echo "</div>";
}
?>
<?php
if (isset($message_display)) {
   echo "<div class='message'>";
   echo $message_display;
   echo "</div>";
}
?>
<div id="main">
	<div id="login">
	<h2>Login Form</h2>
	<hr/>
		<?php echo form_open(base_url(). 'dashboard'); ?>
		<?php
		echo "<div class='error_msg'>";
		if (isset($error_message)) {
		   echo $error_message;
		}
		echo validation_errors();
		echo "</div>";
		?>
	<label>UserName :</label>
	<input type="text" name="username" id="name" placeholder="username"/><br /><br />
	<label>Password :</label>
	<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
	<input type="submit" value=" Login " name="submit"/><br />
	<a href="<?php echo base_url() ?>signup">To SignUp Click Here</a>
		<?php echo form_close(); ?>
	</div>
</div>



<?php
echo $contactMeData;
$this->load->view('templates/footer');
?>