<?php
defined( 'ABSPATH' ) || exit;
?>
<style type="text/css">
  .thumbnail-overlay-top {
    width: 100%;
    height: 50px;
    background: var(--main-color);
    display: block;
  }
  
  .thumbnail-overlay-top h5 {
    padding: 0;
    padding-left: 15px;
  }
  
  .thumbnail-overlay-top h6 {
    color: #fff;
    padding: 0;
    padding-left: 15px;
    font-size: 12px;
  }
  
  .thumbnail-overlay-top h5 a:link,
  .thumbnail-overlay-top h5 a:visited,
  .thumbnail-overlay-top h6 span,
  .thumbnail-overlay-top h6 i,
  .thumbnail-overlay-bottom h5 span,
  .thumbnail-overlay-bottom h5 i{
    color: #fff;
  }
  
  .thumbnail-overlay-bottom {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 50px;
    background: rgba(0,0,0,0.7);
    display: block;
    border: 0;
    border-top: 4px solid var(--main-color);
    color: #fff;
  }
  
  .thumbnail-overlay-bottom h5 {
    color: #fff;
    padding: 0;
    padding-left: 15px;
    padding-top: 10px;
    font-size: 13px;
    width: 90%;
  }
 
  .thumbnail-overlay-bottom h5 a:link,
  .thumbnail-overlay-bottom h5 a:visited {
    color: #fff;
    float: right;
    font-size: 25px;
  }
</style>

<div class="thumbnail-overlay-top">
  <h5>
    <a href="<?php echo get_permalink(); ?>"><?php  echo get_the_title(); ?></a>
  </h5>
  <h6>
    <i class="fa fa-map-marker"></i>
    <span><?php echo wpcf_function()->campaign_location(); ?></span>
  </h6>
</div>

<div class="wpneo-listing-img">
  <a href="<?php echo get_permalink(); ?>" title="<?php  echo get_the_title(); ?>"> <?php echo woocommerce_get_product_thumbnail(); ?></a>
  
  <div class="thumbnail-overlay-bottom">
    <h5>
      <i class="fa fa-users"></i>
      <span>
        <?php
        $terms = get_the_terms(get_the_id(), 'product_cat');
        ?>
        <?php _e($terms[0]->name, 'wp-crowdfunding'); ?></span>
      <a href="<?php echo get_permalink(); ?>"><i class="fa fa-comments"></i></a>
      <div style="clear: both;"></div>
    </h5>
  </div>
</div>