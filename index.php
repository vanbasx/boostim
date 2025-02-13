<?php get_header(); ?>

<div class="bg-red-100">
  index-page
</div>
<div class="container">
  <a ontouchstart href="/contact" class="group/button inline-block hover:bg-primary active:bg-primary px-8 max-[768px]:px-6 py-4 max-[768px]:py-3 border border-primary rounded-full overflow-hidden font-bold hover:text-white active:text-white text-base text-center leading-[140%] transition-colors duration-200 easy-out">
    <div class="relative flex flex-col transition-transform group-hover/button:-translate-y-10 group-active/button:-translate-y-10 duration-400 ease-in-out">
      <span>More Questions</span>
      <span class="top-0 left-0 absolute translate-y-10">More Questions</span>
    </div>
  </a>
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