<em>&copy; 2020</em>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="assets/js/resume.min.js"></script>
  <!-- tinyCME texteditor script -->
	<!--
		<script>
		tinymce.init({ 
		  selector:'.editor',
		  theme: 'modern',
		  height: 200
		});
	</script>
	-->
<script>
function makeEditable(div){
	div.style.border="1px solid #000";
	div.style.padding="20px";
	div.contentEditable=true;
}
	function makeReadOnly(div){
	div.style.border="none";
	div.style.padding="0px";
	div.contentEditable=false;
//	alert("You are now saving your changes.");
}
	
$(document).ready(function(argument) {
				$('#editBtn').click(function(){
					// Get edit field value
					$edit = $('#contactMe').html();
					$.ajax({
						url: '<?php echo site_url(); ?>edit',
						type: 'post',
						data: {
							data: $edit
						},
						datatype: 'html',
						success: function(rsp){
								alert(rsp);
							}
					});
				});
			});
</script>
</body>
</html>