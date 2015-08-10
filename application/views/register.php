    <div class="content">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  <div class="alert alert-danger">
				  		<?php if ( $this->session->flashdata('message')) { echo $this->session->flashdata('message'); }?>
				</div>
				  	<h2>DAFTAR</h2>
					    <form method="post" action="<?php echo site_url(); ?>/masuk/daftar">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="username" type="text" maxlength="20" required></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="email" type="text" maxlength="45" required></span>
						    </div>
						    <div>
						     	<span><label>Password</label></span>
						    	<span><input name="password" type="text" maxlength="35" required></span>
						    </div>
						    <div>
						     	<span><label>Company Name</label></span>
						    	<span><input name="company" type="text"  maxlength="35" required></span>
						    </div>
						    <div>
							<p><?=$image; ?></p>
						     	<span><label>Captcha</label></span>
						    	<span><input name="secutity_code" type="text" maxlength="10" required></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"  class="myButton"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
				
				 </div>
			  </div>		
         </div> 