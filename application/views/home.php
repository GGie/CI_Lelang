<div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
		  <?php foreach ( $data->result() as $product ) { ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/product/<?php echo $product->img_url_1 ?>" alt="" /></a>
					 <h2><?php echo $product->nama_product ?></h2>
					 <div class="timeshop"> 2D 3H 20:00:00 </div>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rp. <?php echo $product->harga_product ?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="<?php echo site_url(); ?>/product/detail/<?php echo $product->id_product ?>">Tawar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<?php } ?>
				
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/new-pic1.jpg" alt="" /></a>					
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="timeshop"> 2D 3H 20:00:00 </div>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rp. 150.000</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Tawar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/new-pic2.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="timeshop"> 2D 3H 20:00:00 </div>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rp. 200.000</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Tawar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/new-pic4.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="timeshop"> 2D 3H 20:00:00 </div>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rp. 300.000</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Tawar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/new-pic3.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="timeshop"> 2D 3H 20:00:00 </div>					 
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rp. 100.000</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Tawar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
			</div>
    </div>
 </div>