<?php 
/*Template Name: Contact Us */
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
    <div class="col-md-5">
      <div class="info">
        <h3> Address </h3>
        <p> <?php echo get_field("address", 13); ?></p>
        <h3 class="btop"> Telephones</h3>
        <p> <?php echo get_field("telephone", 13); ?></p>
        <h3 class="btop"> Mobile</h3>
        <p> <?php echo get_field("mobile_number", 13); ?> </p>
        <h3 class="btop"> Email Id</h3>
        <p> <a href="mailto:<?php echo get_field("email_id", 13); ?>"><?php echo get_field("email_id", 13); ?></a></p>
      </div>
    </div>
    <div class="col-md-7">
      <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d978.2701319115719!2d75.77796012166782!3d11.255486445447433!3m2!1i1024!2i768!4f13.1!2m1!1spost+office%2C+corporation+office+road%2C+calicut!5e0!3m2!1sen!2sin!4v1411322582286" width="100%" height="400" frameborder="0" style="border:0"></iframe>
    </div>
  </div>
</div>
<?php get_footer(); ?>