<article
  id="post-<?php the_ID(); ?>"
  <?php post_class( 'bg-white p-8 rounded-[20px] flex flex-col gap-12 max-[430px]:gap-8 justify-between' ); ?>
>
  <div>
    <div class="flex justify-between items-center mb-6">
      <div class="bg-blue-500 rounded-full size-3.5"></div>
      <span class="font-medium text-secondary text-sm">
        5 min read
      </span>
    </div>
    <p class="pr-5 font-bold text-2xl max-[570px]:text-2xl max-[768px]:text-3xl leading-[1.5] tracking-tight">
      <?php echo esc_html( get_the_title() ); ?>
    </p>
  </div>
  <div class="flex justify-between items-center gap-10 max-[1240px]:gap-5 max-[570px]:gap-5 max-[768px]:gap-10">
    <p class="line-clamp-3 font-medium text-secondary text-sm max-[570px]:text-sm max-[768px]:text-base leading-[1.6]">
      <?php echo esc_html( get_the_excerpt() ); ?>
    </p>
    <a 
      ontouchstart
      href="<?php echo esc_url( get_permalink() ); ?>" 
      class="border-primary bg-prima px-8 max-[1240px]:px-6 max-[570px]:px-6 max-[768px]:px-8 py-4 max-[1240px]:py-3 max-[570px]:py-3 max-[768px]:py-4 border rounded-full"
    >
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.6665 12.5H19.6665" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.6665 5.5L19.6665 12.5L12.6665 19.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>
  </div>
</article>