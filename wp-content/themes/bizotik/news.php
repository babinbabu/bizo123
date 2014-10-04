<?php 
/* Template Name: News */ 
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
   
 <?php 
      $n=0;
      $newses = query_posts(
                                    array( 'post_type' => 'news',
                                            'posts_per_page' => -1,
                                            'orderby'=>'menu_order',
                                            'order'=>'ASC')); ?>
                 <?php foreach ($newses as $news) { 
                  $day =substr("$news->post_date",0,10)  ;?>
                   <div class="newsdiv clearfix" id="<?php echo $news->ID; ?>">
      <div class="date_card"><?php echo date("d M Y",strtotime($day));?></div>
      <div class="post_title">
        <h3 class="news_title"><?php echo get_the_title( $news->ID ); ?> </h3>
        <div class="news_post">
        <?php $content=get_the_content_by_id($news->ID); ?>
          <p> <?php echo $content; ?> </p>
        </div>
      </div>
      </div>
      <?php }?>
    
  </div>
</div>
<?php get_footer(); ?>