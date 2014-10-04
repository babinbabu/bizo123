<?php
/*Template Name: Products */
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

      <?php $Products = query_posts(
                                    array( 'post_type' => 'products',
                                            'posts_per_page' => -1,
                                            'orderby'=>'menu_order',
                                            'order'=>'ASC')); ?>
                 <?php foreach ($Products as $Product) { ?>
    <div class="col-md-3 col-sm-6">
      <div class="product-blk">
        <div class="product_image"> <a href="<?php echo get_field("product_image", $Product->ID); ?>" data-imagelightbox="f"> <img src="<?php echo get_field("product_image_thumb", $Product->ID); ?>" alt=""></a> </div>
        <div class="product_search"> <img src="images/ico-search.png" > </div>
        <div class="product_id"><?php echo $Product->post_title;?> </div>
      </div>
    </div>
   <?php }?>
    

  </div>
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


        //  ALL COMBINED

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
 <?php get_footer(); ?>