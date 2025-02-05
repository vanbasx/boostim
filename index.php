<?php get_header(); ?>

<div class="bg-red-100">
  index-page
</div>

<?php
$cases = new WP_Query(array(
  'post_type'      => 'boostim_case',
  'posts_per_page' => -1
));

while ( $cases->have_posts() ) {
  $cases->the_post();
  get_template_part('partials/case');
} 
?>

<?php get_footer(); ?>