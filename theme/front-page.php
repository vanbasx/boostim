<?php get_header(); ?>

<section class="mt-15 mb-36">
  <div class="flex max-[1024px]:flex-col items-start gap-20 max-[1240px]:gap-10 container">
    <div class="basis-1/2">
      <h1 class="text-[clamp(3.5rem,-0.167rem+5.73vw,4.5rem)] text-balance text-primary max-[1024px]:text-[clamp(2.5rem,1.369rem+4.89vw,4.5rem)] max-[1024px]:text-pretty font-bold leading-[110%] tracking-tight pb-8 max-[1024px]:pb-5">
        Stay ahead of the curve with our forward-thinking
      </h1>
      <p class="text-balance text-secondary max-[1024px]:text-pretty leading-[180%] pb-10">
        An award-winning SEO agency with disciplines in digital marketing, design, and website development. Focused on understanding you.
      </p>
      <div class="flex items-center gap-12 max-[500px]:gap-6 pb-22 max-[1240px]:pb-10">
        <a href="/" class="flex items-center gap-10 text-white font-bold leading-[140%] bg-primary px-8 py-4 rounded-full">
          Schedule Call
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="/" class="text-primary font-bold underline">
          View Case Study
        </a>
      </div>
      <div class="flex max-[1024px]:flex-row max-[1240px]:flex-col max-[768px]:flex-col max-[1024px]:items-center max-[500px]:items-center max-[768px]:items-start min-[1241px]:items-center min-[1024px]:justify-between gap-5">
        <span class="text-balance text-primary text-sm max-[500px]:text-center font-bold leading-[160%] w-[150px] max-[1024px]:w-[150px] max-[1240px]:w-full max-[768px]:w-full">
          Trusted by the world's biggest brands
        </span>
        <div class="flex items-center gap-8 max-[500px]:*:h-7">
          <img src="<?php echo get_parent_theme_file_uri( 'assets/img/icons/afterpay.svg' ) ?>" alt="afterpay logo">
          <img src="<?php echo get_parent_theme_file_uri( 'assets/img/icons/basecamp.svg' ) ?>" alt="basecamp logo">
          <img src="<?php echo get_parent_theme_file_uri( 'assets/img/icons/maze.svg' ) ?>" alt="maze logo">
        </div>
      </div>
    </div>
    <div class="min-[1240px]:pt-8 basis-1/2">
      <div class="flex gap-6 mb-6 h-[275px]">
        <div class="relative bg-secondary rounded-[100%_20px_20px_20px] w-full">
          <div class="-top-8 right-10 absolute bg-primary p-8 max-[1240px]:p-6 rounded-full">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M46 12L27 31L17 21L2 36" stroke="#A8D67B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M34 12H46V24" stroke="#A8D67B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
        <div class="flex flex-col justify-between bg-gray px-6 py-8 rounded-[20px]">
          <div>
            <div class="text-[84px] text-primary font-bold !leading-[90%] pb-7">
              215+
            </div>
            <p class="text-pretty text-secondary leading-[150%]">
              some big companies that we work with, and trust us very much
            </p>
          </div>
          <div class="relative before:top-0 before:left-0 before:absolute content-[''] bg-[#D9D9D9] before:bg-primary w-full before:w-2/3 h-1.5 before:h-full"></div>
        </div>
      </div>
      <div class="relative bg-primary px-8 pt-12 pb-15 rounded-[20px]">
        <div class="relative before:top-1/2 before:left-0 before:absolute text-white before:bg-white mb-6 pl-16 before:w-13 before:h-px before:-translate-y-1/2">
          Drive More Traffic and Sales
        </div>
        <p class="text-[32px] text-balance text-white font-bold leading-[130%]">
          Drive more traffic and product sales
        </p>
        <img src="<?php echo get_parent_theme_file_uri( 'assets/img/chart.png' ) ?>" alt="chart" class="right-5 bottom-0 absolute w-[228px]">
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>