    <div class="center_content">
	<div class="center_title_bar">Latest Products</div>
	<?php foreach ( $data->result() as $katalog ) { ?>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#"><?php echo $katalog->product_title; ?></a></div>
          <div class="product_img"><a href="#"><img src="<?php echo base_url() ?>assets/img/<?php echo $katalog->product_img; ?>" alt="" border="0" /></a></div>
          <div class="prod_price"><!--<span class="reduce">350$</span>--> <span class="price">Rp. <?php echo number_format($katalog->prod_price, 0, '', '.') ?></span></div>
        </div>
        <div class="prod_details_tab"> <a href="<?php echo site_url() ?>/katalog/katalog/detail/<?php echo $katalog->id; ?>" class="btn">Details</a> </div>
      </div>
	<?php } ?>
    </div>
    <!-- end of center content -->
