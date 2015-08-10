    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
	  
	  <?php $no = 0 ?>
	  <?php foreach ( $kategory->result() AS $kategory ) { ?>
	  <?php $no++ ?>
	  <?php if ( $no % 2 == 0 ) { ?>
		<li class="even">
		<?php } else { ?>
		<li class="odd">
		<?php } ?>
			<a href="<?php echo site_url() ?>/kategory/kategory/index/<?php echo $kategory->kategory ?>"><?php echo $kategory->kategory ?></a>
		</li>
	  <?php } ?>

      </ul>
      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title"><a href="#">Makita 156 MX-VL</a></div>
        <div class="product_img"><a href="#"><img src="<?php echo base_url() ?>assets/images/p1.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Newsletter</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
        <a href="#" class="join">subscribe</a> </div>
      <div class="banner_adds"> <a href="#"><img src="<?php echo base_url() ?>assets/images/bann2.jpg" alt="" border="0" /></a> </div>
    </div>