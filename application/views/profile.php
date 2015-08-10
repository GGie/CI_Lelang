	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Profil</h3>
				      <li><a href="#">Pemberitahuan</a></li>
				      <li><a href="<?php echo site_url(); ?>/product/index">Lelang Barang</a></li>
				      <li><a href="#">Cari Barang Lelang</a></li>
				      <li><a href="#">Accessories</a></li>
				      <li><a href="#">Software</a></li>
				       <li><a href="#">Sports &amp; Fitness</a></li>
				       <li><a href="#">Setting</a></li>
				       <li><a href="<?php echo site_url(); ?>/masuk/logout">Logout</a></li>
				  </ul>
				</div>					
	  	     </div>
				<div class="header_bottom_right">					 
				<div class="grid_1_of_4 images_1_of_4">
				<?php foreach ( $data->result() as $profil ) { ?>
					 <img src="<?php echo base_url(); ?>assets/images/profil.png" alt="" />
					 <h4><?php echo $profil->username; ?></h4>
				
				</div>					 
				<div class="grid_1_of_4 pull">
				<table>
					<tr>
						<td align="right" width="100px">
							ID Profil :
						</td>
						<td align="left"  width="150px">
							<?php echo $profil->id_user; ?>
						</td>
					</tr>
					<tr>
						<td align="right" width="100px">
							Username :
						</td>
						<td align="left"  width="150px">
							<?php echo $profil->username; ?>
						</td>
					</tr>
					<tr>
						<td align="right" width="80px">
							Email :
						</td>
						<td align="left"  width="100px">
							<?php echo $profil->email; ?>
						</td>
					</tr>
				</table>
				</div>
				<?php } ?>
				</div>
		   <div class="clear"></div>
		</div>
		