<?php 
/*Template Name: About-us*/
?>
<?php get_header(); 
$bid=get_the_ID();
?>

<div class="inner-ban" style="background-image:url(<?php echo get_field('banner_image',$bid) ?>);">
  <div class="container">
    <h2><?php the_title(); ?></h2>
  </div>
</div>

<!-- Content -->
<div class="white">
  <div class="container inner-content">
    <div class="col-md-6">
      <h2 class="title"> BIZOTIK  is  guided  with trust and Commitment in  providing  reliable  products, safety to  our 
        people  and  to  the environment. </h2>
      <p> Respects the needs  and  requirement  of  our  customers  and 
        excellent performance in  both  products  and  services.  With  that  foundation  BIZOTIK  will 
        continue  to  provide  products  of  superior  quality,  excellent  innovations  and  commitment  to 
        serve the needs of every client worldwide.</p>
      <div class="clear"></div>
      <h2 class="title btop">Vision</h2>
      <p>To become the leading natural stone and  stone adhesive suppliers in south India by full 
        filling societal goals</p>
      <div class="clear"></div>
      <h2 class="title btop">Mission</h2>
      <p>Providing good quality products and services </p>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 pic-box">
      <figure><img src="images/abt_pic1.jpg" alt=""></figure>
      <figure><img src="images/abt_pic2.jpg" alt=""></figure>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 pic-box">
      <figure><img src="images/abt_pic3.jpg" alt=""></figure>
    </div>
  </div>
</div>
<?php get_footer();?>