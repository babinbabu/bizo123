<?php
/*Template Name: Project*/
 ?>
 <?php get_header(); ?>
 <div class="inner-ban">
  <div class="container">
    <h2> Projects</h2>
  </div>
</div>
<!-- Content -->
<div class="white">
  <div class="container inner-content">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
      <div class="project-block"> <a href="images/projects/01.jpg" data-imagelightbox="f"> <img alt="" src="images/projects/01.jpg" class="img-responsive" /></a> <a href="images/projects/01-1.jpg" data-imagelightbox="f"> <img alt="" src="images/projects/01.jpg" class="img-responsive" /></a> <a href="images/projects/01-2.jpg" data-imagelightbox="f"> <img alt="" src="images/projects/01.jpg" class="img-responsive" /></a> <a href="images/projects/01-3.jpg" data-imagelightbox="f"> <img alt="" src="images/projects/01.jpg" class="img-responsive" /></a>
        <div class="caption"> <a class="new-box" href=""><span class="new-label">Ongoing</span> </a>
          <h2 class="title"> Project Name #1</h2>
          <p> Aenean nonummy hendrerit mauris. Phasellus porta. Fusce scipit varius mi. Cum sociis
            natoque penatibus et magnis dis partnt montes, nascetur ridiculus mus. Nulla dui.</p>
          <a href="images/projects/01.jpg" data-imagelightbox="f" class="link">View Gallery</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
      <div class="project-block"> <a href="images/projects/02.jpg" data-imagelightbox="f"> <img alt="" src="images/projects/02.jpg" class="img-responsive" /></a>
        <div class="caption">
          <h2 class="title"> Project Name #2</h2>
          <p> Aenean nonummy hendrerit mauris. Phasellus porta. Fusce scipit varius mi. Cum sociis
            natoque penatibus et magnis dis partnt montes, nascetur ridiculus mus. Nulla dui.</p>
          <a href="images/projects/02.jpg" data-imagelightbox="f" class="link">View Gallery</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
      <div class="project-block"> <a href="images/projects/03.jpg" data-imagelightbox="f"> <img alt="" src="images/projects/03.jpg" class="img-responsive" /></a>
        <div class="caption">
          <h2 class="title"> Project Name #3</h2>
          <p> Aenean nonummy hendrerit mauris. Phasellus porta. Fusce scipit varius mi. Cum sociis
            natoque penatibus et magnis dis partnt montes, nascetur ridiculus mus. Nulla dui.</p>
          <a href="images/projects/03.jpg" data-imagelightbox="f" class="link">View Gallery</a> </div>
      </div>
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
