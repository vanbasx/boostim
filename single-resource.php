<?php get_header(); ?>

<section class="mt-24 max-[1024px]:mt-16 max-[768px]:mt-5 mb-16">
  <div class="mx-auto px-4 max-[1024px]:px-12 max-[628px]:px-4 max-w-[862px]">
    <div class="pb-8 border-primary border-b">
      <h1 class="mb-5 font-bold text-primary max-[570px]:text-[32px] text-4xl text-pretty leading-[1.3] tracking-tight">
        <?php echo esc_html( get_the_title() ); ?>
      </h1>
      <div class="flex items-center gap-2 font-meddium text-secondary text-sm">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_457_300)"><mask id="mask0_457_300" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20"><path d="M20 0H0V20H20V0Z" fill="white"/></mask><g mask="url(#mask0_457_300)"><path d="M3.3335 5.83332C3.3335 5.3913 3.50909 4.96737 3.82165 4.65481C4.13421 4.34225 4.55814 4.16666 5.00016 4.16666H15.0002C15.4422 4.16666 15.8661 4.34225 16.1787 4.65481C16.4912 4.96737 16.6668 5.3913 16.6668 5.83332V15.8333C16.6668 16.2753 16.4912 16.6992 16.1787 17.0118C15.8661 17.3244 15.4422 17.5 15.0002 17.5H5.00016C4.55814 17.5 4.13421 17.3244 3.82165 17.0118C3.50909 16.6992 3.3335 16.2753 3.3335 15.8333V5.83332Z" stroke="#878C91" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.3335 2.5V5.83333" stroke="#878C91" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.66699 2.5V5.83333" stroke="#878C91" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.3335 9.16666H16.6668" stroke="#878C91" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.66699 11.6667V15" stroke="#878C91" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 11.6667V15" stroke="#878C91" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.3335 11.6667V15" stroke="#878C91" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/></g></g><defs><clipPath id="clip0_457_300"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>
        <?php echo get_the_date('F j, Y'); ?>
      </div>
    </div>
  </div>
</section>

<section class="mb-32 max-[570px]:mb-15">
  <div class="mx-auto px-4 max-[1024px]:px-12 max-[628px]:px-4 max-w-[862px]">
    <?php the_content(); ?>
  </div>
</section>

<div class="mx-auto px-4 max-w-[1408px]">
  <div 
    style="background: url('<?php echo get_parent_theme_file_uri( 'assets/img/dark-background.webp' ) ?>')"
    class="flex max-[570px]:flex-col justify-between items-center gap-15 max-[570px]:gap-9 !bg-primary !bg-cover !bg-no-repeat px-16 max-[430px]:px-4 max-[768px]:px-10 py-20 max-[570px]:py-14 rounded-[30px]"
  >
    <h6 class="font-bold text-[80px] text-white max-[570px]:text-4xl max-[768px]:text-5xl max-[1024px]:text-6xl max-[1240px]:text-7xl max-[570px]:text-center">
      Ready to work with us?
    </h6>
    <a ontouchstart href="/contact" class="group/button bg-white px-8 max-[1024px]:px-5 py-4 max-[1024px]:py-3 rounded-full overflow-hidden max-[1024px]:text-sm shrink-0">
      <div class="relative transition-transform group-hover/button:-translate-y-10 group-active/button:-translate-y-10 duration-300 ease-in-out">
        <div class="flex items-center gap-10 max-[1024px]:gap-2">
          <span class="font-bold text-primary leading-[1.4]">Get Started</span>
          <svg class="max-[1024px]:size-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" class="stroke-primary" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" class="stroke-primary" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="top-0 left-0 absolute flex items-center gap-10 max-[1024px]:gap-2 translate-y-10">
          <span class="font-bold text-primary leading-[1.4]">Get Started</span>
          <svg class="max-[1024px]:size-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" class="stroke-primary" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" class="stroke-primary" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
      </div>
    </a>
  </div>
</div>

<?php get_footer(); ?>