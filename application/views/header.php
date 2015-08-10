<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url(); ?>assets/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/startstop-slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lisensi.js"></script>

<!-- Untuk Fixed Menu Header -->
<link href="<?php echo base_url(); ?>assets/css/fixed.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fixed.js"></script>
 
</head>
<body>
<!-- Javascript Untuk Fixed Menu Header -->
<script type='text/javascript'>
jQuery(document).ready(function($){
	var aboveHeight = $('#gie-top-wrapper').outerHeight();
        $(window).scroll(function(){
                if ($(window).scrollTop() > aboveHeight){
                $('#gie-nav').addClass('gie-fixed-nav').css('top','0').next()
                .css('padding-top','43px');
                } else {
                $('#gie-nav').removeClass('gie-fixed-nav').next()
                .css('padding-top','0');
                }
        });

});
</script>
			<div class="logo">
				<a href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" /></a>
			</div>
			  <div class="cart">
			<div class="account_desc">
				<ul>
				<?php if (!$this->session->userdata('id_user')) { ?>
					<li><a href="<?php echo site_url(); ?>/masuk/daftar">Register</a></li>
					<li><a href="<?php echo site_url(); ?>/masuk/login">Login</a></li>
				<?php } ?>
				<?php if ($this->session->userdata('id_user')) { ?>
					<li><a href="<?php echo site_url(); ?>/profile/id/<?php echo $this->session->userdata('id_user') ?>">Profil</a></li>
					<li><a href="<?php echo site_url(); ?>/masuk/logout">Logout</a></li>
				<?php } ?>
				</ul>
			</div>
			  </div>	
		<div id="gie-nav">
		<div id="gie-main-nav-wrapper">
			<div id="gie-main-nav">
			<!--main-nav-->
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
			    	<li><a href="#">About</a></li>
			    	<li><a href="#">Delivery</a></li>
			    	<li><a href="#">News</a></li>
			    	<li><a href="#">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	</div>	
	<!--end main-nav-->		
			</div><!--main-nav-->
		</div><!--main-nav-wrapper-->
	</div>
	
  <div class="wrap"> <!-- Wrap Content -->
	<div class="header">


		<div class="header_top">

			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
	 <div class="lisensi"></div>
  </div>
     

   </div>
 