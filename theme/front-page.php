<?php get_header(); ?>

<section class="mt-16 max-[1024px]:mt-5">
  <div class="flex max-[1024px]:items-center justify-between gap-15 max-[1024px]:gap-6 max-[1240px]:gap-8 container">

    <div class="w-full">
      <h1 class="text-7xl text-balance text-primary max-[1240px]:text-6xl max-[1024px]:text-5xl font-bold leading-[1.1] tracking-tight max-[1240px]:tracking-tighter mb-10 max-[1240px]:mb-7">
        Stay ahead of the curve with our forward-thinking
      </h1>
      <p class="text-balance mb-10 subtitle">
        An award-winning SEO agency with disciplines in digital marketing, design, and website development. Focused on understanding you.
      </p>
      <div class="flex items-center gap-12 max-[1024px]:gap-8 mb-22 max-[1240px]:mb-12">
        <a href="" class="flex items-center gap-10 max-[1024px]:gap-2 max-[1024px]:text-sm bg-primary px-8 max-[1024px]:px-5 py-4 max-[1024px]:py-3 rounded-full">
          <span class="text-white font-bold leading-[1.4]">Schedule Call</span>
          <svg class="max-[1024px]:size-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="" class="text-primary max-[1024px]:text-sm font-bold underline">
          View Case Study
        </a>
      </div>
      <div class="flex max-[1240px]:flex-col items-center max-[1240px]:items-start gap-12 max-[1240px]:gap-3">
        <span class="text-primary text-sm font-bold w-[150px] max-[1240px]:w-full">
          Trusted by the world's biggest brands
        </span>
        <div class="flex items-center gap-8 max-[1024px]:*:h-6">
          <img src="<?php echo get_parent_theme_file_uri( 'assets/img/icons/afterpay.svg' ) ?>" alt="afterpay">
          <img src="<?php echo get_parent_theme_file_uri( 'assets/img/icons/basecamp.svg' ) ?>" alt="basecamp">
          <img src="<?php echo get_parent_theme_file_uri( 'assets/img/icons/maze.svg' ) ?>" alt="maze">
        </div>
      </div>
    </div>

    <div class="pt-8 w-full">
      <div class="flex items-stretch gap-6 max-[1024px]:gap-2 max-[1240px]:gap-4 mb-6 max-[1024px]:mb-2 max-[1240px]:mb-4">
        <div class="relative bg-[#C7C7C7] rounded-[100%_20px_20px_20px] w-full">
          <div class="-top-8 right-8 absolute bg-primary p-7 rounded-full">
            <svg class="max-[1240px]:size-7 max-[1024px]:size-5" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M46 12L27 31L17 21L2 36" stroke="#A8D67B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M34 12H46V24" stroke="#A8D67B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
        <div class="bg-gray p-6 max-[1024px]:p-3 pb-8 max-[1024px]:pb-5 rounded-[20px] w-full">
          <p class="text-[84px] text-primary max-[1024px]:text-5xl max-[1240px]:text-6xl font-bold leading-none mb-5 max-[1240px]:mb-3">
            215+
          </p>
          <p class="text-pretty max-[1024px]:text-sm font-medium leading-[1.5] max-[1024px]:tracking-tight mb-16 max-[1024px]:mb-7 max-[1240px]:mb-10 subtitle">
            some big companies that we work with, and trust us very much
          </p>
          <div class="relative before:top-0 before:left-0 before:absolute bg-[#D9D9D9] before:bg-primary w-full before:w-2/3 h-1.5 before:h-full"></div>
        </div>
      </div>

      <div class="relative text-white bg-primary pt-12 max-[1024px]:pt-6 pr-68 max-[1024px]:pr-22 max-[1240px]:pr-32 pb-15 max-[1240px]:pb-20 pl-8 max-[1024px]:pl-5 rounded-[20px]">
        <div class="flex items-center gap-3 mb-8 max-[1240px]:mb-2">
          <div class="bg-white w-13 max-[1024px]:w-5 h-px"></div>
          <p class="text-sm">Drive More Traffic and Sales</p>
        </div>
        <p class="text-3xl max-[1024px]:text-2xl font-bold leading-[1.3] w-2xs max-[1240px]:w-full">
          Drive more traffic and product sales 
        </p>
        <img class="right-5 bottom-0 absolute w-[227px] max-[1024px]:w-[130px] max-[1240px]:w-[180px]" src="<?php echo get_parent_theme_file_uri( 'assets/img/chart.png' ) ?>" alt="">
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>