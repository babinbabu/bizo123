<?php
/*Template Name: Request a Quote */
 ?>
 <?php get_header(); 
 $bid=get_the_ID(); ?>
 <div class="inner-ban" style="background-image:url(<?php echo get_field('banner_image',$bid) ?>);">
  <div class="container">
    <h2><?php the_title(); ?></h2>
  </div>
</div>

<!-- Content -->
<div class="white">
  <div class="container inner-content">
    <div class="row">
     <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form"]'); ?>
      
    </div>
  </div>
</div>
 <?php get_footer();?>