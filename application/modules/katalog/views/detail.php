	<div class="center_content">
	
	<?php foreach ( $data->result() as $katalog ) { ?>	
      <div class="center_title_bar"><?php echo $katalog->product_title; ?></div>
      <div class="prod_box_big">
        <div class="center_prod_box_big">
          <div class="product_img_big"> 
		  <a href="javascript:popImage('images/big_pic.jpg','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]">
			<img src="<?php echo base_url() ?>assets/img/<?php echo $katalog->product_img; ?>" alt="" border="0" />
		  </a>
            <div class="thumbs"> <a href="#" title="header=[Thumb1] body=[&nbsp;] fade=[on]"><img src="images/thumb1.jpg" alt="" border="0" /></a> <a href="#" title="header=[Thumb2] body=[&nbsp;] fade=[on]"><img src="images/thumb2.jpg" alt="" border="0" /></a> <a href="#" title="header=[Thumb3] body=[&nbsp;] fade=[on]"><img src="images/thumb1.jpg" alt="" border="0" /></a> </div>
          </div>
          <div class="details_big_box">
            <div class="product_title_big"><?php echo $katalog->product_title; ?></div>
            <div class="specifications">
              Description :<span class="blue"><?php echo $katalog->prod_desc; ?> </span><br />
            </div>
          <div class="prod_price_big"><!--<span class="reduce">350$</span>--> <span class="price">Rp. <?php echo number_format($katalog->prod_price, 0, '', '.') ?></span></div>
		</div>
        </div>

      </div>
	<?php } ?>
	
      <div class="prod_box_big">
        <div style="border:1px #F0F4F5 solid; padding: 20px;">

Rp. <input type="number" min="0" name="price">

	</div>
	</div>
      
<!-- DC Comment Boxes Start -->
	<?php foreach ( $comment->result() as $komentar ) { ?>	
<div class="prod_box_big">
  <div class="tsc_clean_comment">
    <div class="avatar_box"> <img src="<?php echo base_url() ?>assets/images/avatar.jpg" alt="Avatar" class="avatar" />
      <p class="username">Joe Blogs</p>
    </div>
    <div class="comment_box fr">
      <p class="comment_paragraph">Rp. <?php echo number_format($komentar->price, 0, '', '.') ?></p>
      <span class="date"><?php echo $komentar->date ?></span> </div>
    <div class="tsc_clear"></div>
  </div>
  </div>
<?php } ?>
<!-- DC Comment Boxes End -->
    </div>