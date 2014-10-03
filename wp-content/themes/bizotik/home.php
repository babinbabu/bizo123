<?php
/*Template Name: Home */
 ?>
<style type="text/css">
	.col-md-3 img:first-child{
		margin-bottom: 15px;
	}
</style>
 <?php get_header(); ?>
 <div class="fluid_container" style="height:470px;">
  <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap">

 <?php $Home_sliders = query_posts(
                                    array( 'post_type' => 'homeslider',
                                            'posts_per_page' => -1,
                                            'orderby'=>'menu_order',
                                            'order'=>'ASC')); ?>
                 <?php foreach ($Home_sliders as $Home_slider) { ?>

    <div data-src="<?php echo get_field("slider_image", $Home_slider->ID); ?>">
      <div class="camera_caption fadeFromBottom"><?php echo $Home_slider->post_title;?></div>
    </div>
<?php } ?>
  </div>
</div>
<!-- Grey -->
<div class="grey">
  <div class="container">
    <div class="head-product clearfix">
      <h2>Latest Products</h2>
      <h3><a href="">All Products</a></h3>
    </div>
    <div class="row">
    <?php 
    $pstatus=1;
    $displayed_id=0;
    $latestproducts = query_posts(
                                    array( 'post_type' => 'latestproduct',
                                            'posts_per_page' => -1,
                                            'orderby'=>'menu_order',
                                            'order'=>'ASC')); ?>
                 <?php foreach ($latestproducts as $latestproduct) { 
                $status=get_field("latest_product_highlite", $latestproduct->ID);
               	?>
          <?php if($status[0] && $pstatus) {
          	$displayed_id =  $latestproduct->ID;
          	?>    	
      <div class="col-md-6"> <img src="<?php echo get_field("latest_product_image",$latestproduct->ID); ?>" class="img-responsive"> </div>
      <?php 
      $pstatus=0;
  		} }
      ?>
       <?php $i=2; 
       foreach ($latestproducts as $latestproduct) {  ?>
       <?php if($i%2==0) { ?>
       <div class="col-md-3">
       <?php }?>
       	<?php if($latestproduct->ID!=$displayed_id) ?>
       <img src="<?php echo get_field("latest_product_image",$latestproduct->ID); ?>" class="img-responsive" >
      
       <?php if($i%2!=0) { ?>
       		</div>
       		<?php }?>
      <?php $i++; } ?>
    </div>
  </div>
</div>
<!-- Content -->
<div class="white">
  <div class="container">
    <div class="col-md-6">
      <h2 class="title">About Bizotik</h2>
      <p><strong>Byzantine has built a reputation of superior quality, reliability and selection of natural stones for over two decades and have been supplying natural stone and cladding stone products to the market to both commercial and residential customers. </strong></p>
      <p>Stone featured walls have became increasingly popular, as adding an interior stone well gives you the opportunity to incorporate the stones you use inside and outside. We recognize the specific demands of regional stone models by matching them with the diverse qualities of stone veneers brought from different parts 
        of the nation.</p>
    </div>
    <div class="col-md-3">
      <h2 class="title">Latest News</h2>
      <ul class="news">
        <li> <span>20 Sep 2014</span>
          <p> Bizotik took polycoat stones adhesive distribution in kerala</p>
        </li>
        <li> <span>04 Sep 2014</span>
          <p> Bizotik took polycoat stones adhesive distribution in kerala</p>
        </li>
      </ul>
    </div>
    <div class="col-md-3">
      <div class="download">
        <h2>Download Our <br>
          Brochure</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate vehicula tellus ac porttitor. Vivamus lobortis a lorem ac dapibus.</p>
        <a href="" target="_blank">Download Now</a> </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script type='text/javascript' src='js/jquery.min.js'></script> 
<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script> 
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='js/camera.min.js'></script> 
<script>
		jQuery(function(){
			
			jQuery('#camera_wrap').camera({
				height: '470px',
				loader: 'bar',
				pagination: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false,
				imagePath: '',
				fx:'simplefade'
			});

		});
	</script>
 <?php get_footer(); ?>