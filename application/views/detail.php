<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<script src="<?php echo base_url(); ?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assets/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css">
<script src="js/slides.min.jquery.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 6,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
	<div class="main">
    <div class="content">
	
    	<div class="section group">
				
				<div class="cont-desc span_1_of_2">
				<?php foreach ( $detail->result() as $data ) { ?>
				  <div class="product-details">	
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/images/productslide-1.jpg" alt=" " /></a>
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/images/productslide-2.jpg" alt=" " /></a>
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/images/productslide-3.jpg" alt=" " /></a>					
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/images/productslide-4.jpg" alt=" " /></a>
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/images/productslide-5.jpg" alt=" " /></a>
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/images/productslide-6.jpg" alt=" " /></a>
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/thumbnailslide-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/thumbnailslide-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/thumbnailslide-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/thumbnailslide-4.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/thumbnailslide-5.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/thumbnailslide-6.jpg" alt=" " /></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $data->nama_product ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>					
					<div class="price">
						<p>Price: <span>$500</span></p>
					</div>
					<div class="available">
						<p>Available Options :</p>
					<ul>
						<li>Color:
							<select>
							<option>Silver</option>
							<option>Black</option>
							<option>Dark Black</option>
							<option>Red</option>
						</select></li>
						<li>Size:<select>
							<option>Large</option>
							<option>Medium</option>
							<option>small</option>
							<option>Large</option>
							<option>small</option>
						</select></li>
						<li>Quality:<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select></li>
					</ul>
					</div>
				<div class="share-desc">
					<div class="share">
						<p>Share Product :</p>
						<ul>
					    	<li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo site_url(); ?><?php echo $this->uri->uri_string() ?>"><img src="<?php echo base_url(); ?>assets/images/facebook.png" alt="Share facebook Network" width="60"/></a></li>
					    	<li><a href="http://twitter.com/share?url=<?php echo site_url(); ?><?php echo $this->uri->uri_string() ?>"><img src="<?php echo base_url(); ?>assets/images/twitter.png" alt="Share facebook Network"  width="60"/></a></li>				    
			    		</ul>
					</div>
					<div class="button"><span><a href="#">Add to Cart</a></span></div>					
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		  </div>
		  <?php } ?>
		<div class="product_desc">	
				<div class="resp-tabs-container">
					<div class="product-desc">
						<p>Lorem Ipsum is simply dummy text of the <span>printing and typesetting industry</span>. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <span>when an unknown printer took a galley of type and scrambled</span> it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<span> It has survived not only five centuries</span>, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>					
					</div>
			</div>
	 </div>
	
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Related Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
   <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src="<?php echo base_url(); ?>assets/images/new-pic1.jpg" alt=""></a>					
					<div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="#"><img src="<?php echo base_url(); ?>assets/images/new-pic2.jpg" alt=""></a>
					 <div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="#"><img src="<?php echo base_url(); ?>assets/images/new-pic4.jpg" alt=""></a>
					<div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <img src="<?php echo base_url(); ?>assets/images/new-pic3.jpg" alt="">
					 <div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
			</div>
        </div>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
				      <li><a href="#">Mobile Phones</a></li>
				      <li><a href="#">Desktop</a></li>
				      <li><a href="#">Laptop</a></li>
				      <li><a href="#">Accessories</a></li>
				      <li><a href="#">Software</a></li>
				       <li><a href="#">Sports &amp; Fitness</a></li>
				       <li><a href="#">Footwear</a></li>
				       <li><a href="#">Jewellery</a></li>
				       <li><a href="#">Clothing</a></li>
				       <li><a href="#">Home Decor &amp; Kitchen</a></li>
				       <li><a href="#">Beauty &amp; Healthcare</a></li>
				       <li><a href="#">Toys, Kids &amp; Babies</a></li>
    				</ul>
      				 <div class="community-poll">
      				 	<h2>Community POll</h2>
      				 	<p>What is the main reason for you to purchase products online?</p>
      				 	<div class="poll">
      				 		<form>
      				 			<ul>
									<li>
									<input type="radio" name="vote" class="radio" value="1">
									<span class="label"><label>More convenient shipping and delivery </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="2">
									<span class="label"><label for="vote_2">Lower price</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="3">
									<span class="label"><label for="vote_3">Bigger choice</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="5">
									<span class="label"><label for="vote_5">Payments security </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="6">
									<span class="label"><label for="vote_6">30-day Money Back Guarantee </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="7">
									<span class="label"><label for="vote_7">Other.</label></span>
									</li>
									</ul>
      				 		</form>
      				 	</div>
      				 </div>
 				</div>
 		</div>
 	</div>
    </div>
