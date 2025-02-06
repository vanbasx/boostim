<div class="swiper-slide">
  <article
    id="post-<?php the_ID(); ?>"
    <?php post_class( 'relative overflow-hidden aspect-square bg-[#C7C7C7] rounded-[30px] p-8 border-10 max-[768px]:border-6 border-[#4D5052] flex flex-col justify-between' ); ?>
  >
    <img 
      src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" 
      alt="<?php echo esc_attr( get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ); ?>" 
      class="top-0 brightness-55 left-0 absolute w-full h-full object-cover"
    >
    <p class="before:inline-block relative z-2 flex items-center gap-3 before:bg-white before:w-13 before:h-px font-medium text-white">
      Ai Corporation. 2023
    </p>
    <a 
      href="<?php echo esc_url( get_permalink() ); ?>"
      class="before:top-0 before:left-0 z-2 before:absolute before:w-full before:h-full font-bold text-2xl text-white"
    >
      <?php echo esc_html( get_the_title() . ' - ' . get_the_excerpt() ); ?>
    </a>

  </article>
</div>