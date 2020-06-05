<?php
$this->load->view('templates/header');
?>

<!-- Form -->
    <form method='post' action=''>
      <!-- Textarea -->
      <textarea class='editor' name='content'>
      <?php if(isset($content)){ echo $content; } ?> 
      </textarea>
      <br>
      <input type='submit' value='Submit' name='submit'>
    </form>

<?php
$this->load->view('templates/footer');
?>