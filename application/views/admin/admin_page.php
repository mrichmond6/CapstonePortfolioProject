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
echo "Welcome to Admin Page";
echo "<br/>";
echo "<br/>";
echo "Your Username is " . $username;
echo "<br/>";
echo "Your Email is " . $email;
echo "<br/>";
?>
<b id="logout"><a href="<?php echo base_url() ?>logout">Logout</a></b>
</div>
<br/>

<?php
$this->load->view('templates/footer');
?>