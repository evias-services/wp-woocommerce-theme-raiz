<?php
defined( 'ABSPATH' ) || exit;

$col_num = get_option('number_of_words_show_in_listing_description', 130);
$terms = get_the_terms(get_the_id(), 'product_cat');
?>

  <p class="wpneo-short-description"><?php echo wpcf_function()->limit_word_text(strip_tags(get_the_content()), $col_num); ?></p>

