<div class="swiper-slide">
  <article
    id="post-<?php the_ID(); ?>"
    <?php post_class( 'relative overflow-hidden aspect-square bg-[#C7C7C7] rounded-[30px] p-8 max-[570px]:p-5 border-10 max-[768px]:border-8 border-[#4D5052] flex flex-col justify-between group/case' ); ?>
  >
    <img 
      src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" 
      alt="<?php echo esc_attr( get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ); ?>" 
      class="top-0 left-0 absolute brightness-55 w-full h-full object-cover group-hover/case:scale-110 transition-transform duration-300 ease-in-out"
    >
    <p class="before:inline-block z-2 relative flex items-center gap-3 before:bg-white before:w-13 before:h-px font-medium text-white">
      Ai Corporation. 2023
    </p>
    <a 
      href="<?php echo esc_url( get_permalink() ); ?>"
      class="before:top-0 before:left-0 z-2 before:absolute before:w-full before:h-full font-bold text-white max-[570px]:text-xl text-2xl"
    >
      <?php echo esc_html( get_the_title() . ' - ' . get_the_excerpt() ); ?>
    </a>

  </article>
</div>