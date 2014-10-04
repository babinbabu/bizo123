<?php
/*Template Name: Project*/
 ?>
 <?php get_header(); $bid=get_the_ID(); ?>
 <div class="inner-ban" style="background-image:url(<?php echo get_field('banner_image',$bid) ?>);">
  <div class="container">
    <h2><?php the_title(); ?></h2>
  </div>
</div>
<!-- Content -->
<div class="white">
  <div class="container inner-content">

  <?php $projects = query_posts(
                                    array( 'post_type' => 'project',
                                            'posts_per_page' => -1,
                                            'orderby'=>'menu_order',
                                            'order'=>'ASC')); ?>
                 <?php foreach ($projects as $project) { ?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
      <div class="project-block">
       <?php 
     	$id =$project->ID;
             foreach( get_cfc_meta('project_gallery',$id) as $key => $value ){          
              $image=wp_get_attachment_image_src( $value['gallery_images'], 'thumb' );
              ?>    
      <a href="<?php echo $image[0]; ?>" data-imagelightbox="f"> <img alt="" src="<?php echo $image[0]; ?>" class="img-responsive" /></a> 
         <?php
          }
         ?> 
        <div class="caption"><?php if(get_field("work_progress", $project->ID)=="ongoing") {?> <a class="new-box" href=""><span class="new-label">Ongoing</span> </a><?php }?>
          <h2 class="title"><?php echo get_the_title( $project->ID ); ?></h2>
           <?php $content=get_the_content_by_id($project->ID); ?>
    	
          <p><?php echo $content; ?> </p>
          Photos : 
            <?php 
            $i=1;
     		$id =$project->ID;
             foreach( get_cfc_meta('project_gallery',$id) as $key => $value ){  
             if($i==1)    
             {    
              $image=wp_get_attachment_image_src( $value['gallery_images'], 'thumb' );
              $count=count(get_cfc_meta('project_gallery',$id));
              echo $count;
              ?>
              </p>  
          <a href="<?php echo $image[0]; ?>" data-imagelightbox="f" class="link">View Gallery</a> 
          <?php $i++; }}?>
          </div>
      </div>
    </div>
   <?php } ?>
    
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/main.js"></script> 
<script src="js/imagelightbox.min.js"></script> 
<script>

    $(function () {
        // ACTIVITY INDICATOR

        var activityIndicatorOn = function () {
            $('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
        },
			activityIndicatorOff = function () {
			    $('#imagelightbox-loading').remove();
			},


        // OVERLAY

			overlayOn = function () {
			    $('<div id="imagelightbox-overlay"></div>').appendTo('body');
			},
			overlayOff = function () {
			    $('#imagelightbox-overlay').remove();
			},


        // CLOSE BUTTON

			closeButtonOn = function (instance) {
			    $('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function () { $(this).remove(); instance.quitImageLightbox(); return false; });
			},
			closeButtonOff = function () {
			    $('#imagelightbox-close').remove();
			},


        // CAPTION

			captionOn = function () {
			    var description = $('a[href="' + $('#imagelightbox').attr('src') + '"] img').attr('alt');
			    if (description.length > 0)
			        $('<div id="imagelightbox-caption">' + description + '</div>').appendTo('body');
			},
			captionOff = function () {
			    $('#imagelightbox-caption').remove();
			},


        // NAVIGATION

			navigationOn = function (instance, selector) {
			    var images = $(selector);
			    if (images.length) {
			        var nav = $('<div id="imagelightbox-nav"></div>');
			        for (var i = 0; i < images.length; i++)
			            nav.append('<button type="button"></button>');

			        nav.appendTo('body');
			        nav.on('click touchend', function () { return false; });

			        var navItems = nav.find('button');
			        navItems.on('click touchend', function () {
			            var $this = $(this);
			            if (images.eq($this.index()).attr('href') != $('#imagelightbox').attr('src'))
			                instance.switchImageLightbox($this.index());

			            navItems.removeClass('active');
			            navItems.eq($this.index()).addClass('active');

			            return false;
			        })
					.on('touchend', function () { return false; });
			    }
			},
			navigationUpdate = function (selector) {
			    var items = $('#imagelightbox-nav button');
			    items.removeClass('active');
			    items.eq($(selector).filter('[href="' + $('#imagelightbox').attr('src') + '"]').index(selector)).addClass('active');
			},
			navigationOff = function () {
			    $('#imagelightbox-nav').remove();
			},


        // ARROWS

			arrowsOn = function (instance, selector) {
			    var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>');

			    $arrows.appendTo('body');

			    $arrows.on('click touchend', function (e) {
			        e.preventDefault();

			        var $this = $(this),
						$target = $(selector + '[href="' + $('#imagelightbox').attr('src') + '"]'),
						index = $target.index(selector);

			        if ($this.hasClass('imagelightbox-arrow-left')) {
			            index = index - 1;
			            if (!$(selector).eq(index).length)
			                index = $(selector).length;
			        }
			        else {
			            index = index + 1;
			            if (!$(selector).eq(index).length)
			                index = 0;
			        }

			        instance.switchImageLightbox(index);
			        return false;
			    });
			},
			arrowsOff = function () {
			    $('.imagelightbox-arrow').remove();
			};


        //	ALL COMBINED

        var selectorF = 'a[data-imagelightbox="f"]';
        var instanceF = $(selectorF).imageLightbox(
		{
		    onStart: function () { overlayOn(); closeButtonOn(instanceF); arrowsOn(instanceF, selectorF); },
		    onEnd: function () { overlayOff(); captionOff(); closeButtonOff(); arrowsOff(); activityIndicatorOff(); },
		    onLoadStart: function () { captionOff(); activityIndicatorOn(); },
		    onLoadEnd: function () { captionOn(); activityIndicatorOff(); $('.imagelightbox-arrow').css('display', 'block'); }
		});

    });
</script>
