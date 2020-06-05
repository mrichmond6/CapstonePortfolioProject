<?php
//application/views/admin/admin_page.php
$this->load->view('templates/header');

if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
}
?>

<div id="profile">
<?php
echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
echo "<br/>";
echo "<br/>";
echo "Welcome to your Admin Dashboard.";
echo "<br/>";
echo "<br/>";
echo "Your Username is " . $username . " , and your Email is " . $email;
echo "<br/>";
echo "Would you like to edit your content?";
echo "<br/>";
?>
<a href="<?php echo base_url() ?>">Click here to edit your content.</a>
<br/>
	
<b id="logout"><a href="<?php echo base_url() ?>logout">Logout</a></b>
</div>
<br/>

<?php
$this->load->view('templates/footer');
?>