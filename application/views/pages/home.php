<?php
//application/views/pages/home.php

$this->load->view('templates/header');
?>
  <div class="container-fluid p-0">
	  <?php 
	  if (isset($this->session->userdata['logged_in'])) { 
		  echo'You are currently logged in, feel free to edit this page!</p>';
		  echo'<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about" contentEditable="true">';
	  }else{
		  echo '<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">';
	  }?>
	  
      <div class="w-100">
        <h1 class="mb-0" id="about">Morgan
          <span class="text-primary" id="about">Richmond</span>
        </h1>
        <div class="subheading mb-5" id="about">
          <a href="mailto:name@email.com">morgan.richmond@seattlecolleges.edu</a>
        </div>
        <p class="lead mb-5">I am a current Seattle Central Web Development Program student with an anticipated Spring 2020 graduation. In my previous position(s) as a member of retail management, I was responsible for day to day operations of the store, including inventory management, placing supply orders and ensuring that we stayed within budget, processing and fulfilling web orders to be mailed out to customers, and training new employees on how to use the POS system.</p>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/morgan-richmond/",  target="_blank" >
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://github.com/mrichmond6",  target="_blank" >
            <i class="fab fa-github"></i>
		</a>
        </div>
	  <br/>
		  <?php 
	  if (isset($this->session->userdata['logged_in'])) {'
	  <button id="save" contentEditable="false">Click to Save</button>';
		}?>
      </div>
    </section>


    <hr class="m-0">
	<?php if (isset($this->session->userdata['logged_in'])) { echo '
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience" contentEditable="true">';
	}else{
	echo'<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">';
	}?>
      <div class="w-100" >
        <h2 class="mb-5">Experience</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Key Holder</h3>
            <div class="subheading mb-3">Soma Intimates, Pacific Place, 600 Pine Street Suite 310, Seattle Wa. 98121</div>
            <p>•Was responsible for the Operations DOL (Department of Leadership), which includes inventory management, store supplies budgeting and training associates on the POS system.<br>•Opened and closed the store.<br>•Was responsible for weekly paperwork audits.<br>•Handled cash, credit and store merchandise credit transactions as well as refunds.<br>•Assisted with setting the floor and merchandising new product.
			</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">6/15 to 12/16, 10/18 to Current</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Key Holder</h3>
            <div class="subheading mb-3">Clarks, Pacific Place, 600 Pine Street Suite 311, Seattle Wa. 98121</div>
            <p>•Store operations.<br>•Handled change orders and deposits.<br>•Supervised and coached sales associates.<br>•Handled cash, credit and store merchandise credit transactions as well as refunds.<br>•Assisted with merchandising new product.
			</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">6/15 to 4/19</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Cashier</h3>
            <div class="subheading mb-3">Little Caesars, 2301 W Nob Hill Blvd #6, Yakima, Wa. 509-452-7771
</div>
            <p>•Greeted customers and provided excellent customer service.<br>•Handled cash and credit transactions quickly and accurately.<br>•Restocked workstations and display cases.<br>•Cooked and packaged large batches of food that were kept hot until needed or prepared to order.
</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">6/13 to 10/13</span>
          </div>
        </div>
    </section>

    <hr class="m-0">
	<?php if (isset($this->session->userdata['logged_in'])) { echo '
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education" contentEditable="true">';
	}else{
	echo '<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">';
	}?>
      <div class="w-100">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Seattle Central Community College</h3>
            <div class="subheading mb-3">AA - Information Technology</div>
            <div>Web Development Track</div>
            <p>GPA: 3.7</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Spring 2016 - Spring 2020</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">Insight School of Washington</h3>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Fall 2009 - Spring 2013</span>
          </div>
        </div>

      </div>
    </section>

    <hr class="m-0">
	<?php if (isset($this->session->userdata['logged_in'])) { echo '
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="portfolio" contentEditable="true">';
	}else{
	echo '<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="portfolio">';
	}?>
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>
		  <br/>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
<!--
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
-->
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass"></i>
		  </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            Mobile-First, Responsive Design</li>
			<li>
            <i class="fa-li fa fa-check"></i>
            Agile Development &amp; Scrum</li>
        </ul>
      </div>
    </section>

    <hr class="m-0">
<?php if (isset($this->session->userdata['logged_in'])) { echo '
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests" contentEditable="true">';
}else{
	echo '<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">';
}?>
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy reading, drawing and painting. During the warmer months here in Washington, I also enjoy biking, hiking, and kayaking.
		<br/>
		When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
      </div>
    </section>

    <hr class="m-0">

    <?php
//	if (isset($this->session->userdata['logged_in'])) { echo '
//    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="contact-me" contentEditable="true">';
//	}else{
	echo '<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="contact-me">';
?>
      <div class="w-100" ondblclick="makeEditable(this)" onblur="makeReadOnly(this)" contenteditable="true" id="contactMe">
		 
        <?php 
		   
		  foreach((array)$contactMeData as $contact){
			  
			  echo $contact->contactMe; // as you're only getting only contactMe from db
		  }
		?>
      </div>
<br><br>
	<button id="editBtn" type="submit" value="">Save changes
	</button>
	<br><br>
	<div id="status"></div>
</section>

  </div>
<?php echo base_url()?>

<?php
$this->load->view('templates/footer');
?>