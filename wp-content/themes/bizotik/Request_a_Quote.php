<?php
/*Template Name: Request a Quote */
 ?>
 <?php get_header(); ?>
 <div class="inner-ban">
  <div class="container">
    <h2>Request a Quote</h2>
  </div>
</div>

<!-- Content -->
<div class="white">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" maxlength="255" size="60" value="" name="name" id="edit-name" placeholder="Your name" class="form-control form-text required">
        </div>
        <div class="form-group">
          <input type="text" maxlength="255" size="60" value="" name="mail" id="edit-mail" placeholder="Your E-mail Id" class="form-control form-text required">
        </div>
        <div class="form-group">
          <input type="text" maxlength="255" size="60" value="" name="subject" id="edit-subject" placeholder="Location" class="form-control form-text required">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <div class="form-textarea-wrapper">
            <textarea rows="5" cols="60" name="message" id="edit-message" placeholder="Message" class="form-control form-textarea required"></textarea>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="submit-area">
        <button type="submit" value="Send The Message" name="op" id="edit-submit"> Send The Request</button>
      </div>
    </div>
  </div>
</div>
 <?php get_footer();?>