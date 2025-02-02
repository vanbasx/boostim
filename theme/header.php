<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class( 'h-full overflow-x-hidden' ); ?>>
  <div
    style="background: url('<?php echo get_parent_theme_file_uri( 'assets/img/background.png' ); ?>');" 
    class="flex flex-col bg-repeat min-h-full"
  >
    <header class="text-primary py-8">
      <div class="flex items-center justify-between container">
        <div class="flex items-center">
          <a href="/" class="mr-20">
            <svg width="130" height="33" viewBox="0 0 130 33" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_122_1235" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="33" height="33"><path d="M0 6C0 3.17157 0 1.75736 0.87868 0.87868C1.75736 0 3.17157 0 6 0H31.2321C32.2085 0 33 0.791497 33 1.76786C33 19.0169 19.0169 33 1.76786 33C0.791496 33 0 32.2085 0 31.2321V6Z" fill="#99EA48"/></mask><g mask="url(#mask0_122_1235)"><path d="M0 6C0 3.17157 0 1.75736 0.87868 0.87868C1.75736 0 3.17157 0 6 0H31.2321C32.2085 0 33 0.791497 33 1.76786C33 19.0169 19.0169 33 1.76786 33C0.791496 33 0 32.2085 0 31.2321V6Z" fill="#99EA48"/><path d="M11 17.5C11 14.6716 11 13.2574 11.8787 12.3787C12.7574 11.5 14.1716 11.5 17 11.5H24.25C24.6642 11.5 25 11.8358 25 12.25C25 19.5678 19.0678 25.5 11.75 25.5C11.3358 25.5 11 25.1642 11 24.75V17.5Z" fill="#191F33"/></g><path d="M42.68 26V8.72H49.532C50.7 8.72 51.656 8.956 52.4 9.428C53.152 9.892 53.708 10.488 54.068 11.216C54.436 11.944 54.62 12.696 54.62 13.472C54.62 14.424 54.392 15.232 53.936 15.896C53.488 16.56 52.876 17.008 52.1 17.24V16.64C53.188 16.888 54.012 17.404 54.572 18.188C55.14 18.972 55.424 19.864 55.424 20.864C55.424 21.888 55.228 22.784 54.836 23.552C54.444 24.32 53.86 24.92 53.084 25.352C52.316 25.784 51.364 26 50.228 26H42.68ZM45.608 23.276H49.868C50.372 23.276 50.824 23.176 51.224 22.976C51.624 22.768 51.936 22.48 52.16 22.112C52.392 21.736 52.508 21.292 52.508 20.78C52.508 20.316 52.408 19.9 52.208 19.532C52.008 19.164 51.716 18.872 51.332 18.656C50.948 18.432 50.488 18.32 49.952 18.32H45.608V23.276ZM45.608 15.62H49.496C49.912 15.62 50.284 15.54 50.612 15.38C50.94 15.22 51.2 14.984 51.392 14.672C51.584 14.36 51.68 13.976 51.68 13.52C51.68 12.92 51.488 12.42 51.104 12.02C50.72 11.62 50.184 11.42 49.496 11.42H45.608V15.62ZM62.3446 26.36C61.0486 26.36 59.9166 26.068 58.9486 25.484C57.9806 24.9 57.2286 24.096 56.6926 23.072C56.1646 22.04 55.9006 20.856 55.9006 19.52C55.9006 18.16 56.1726 16.968 56.7166 15.944C57.2606 14.92 58.0166 14.12 58.9846 13.544C59.9526 12.968 61.0726 12.68 62.3446 12.68C63.6486 12.68 64.7846 12.972 65.7526 13.556C66.7206 14.14 67.4726 14.948 68.0086 15.98C68.5446 17.004 68.8126 18.184 68.8126 19.52C68.8126 20.864 68.5406 22.052 67.9966 23.084C67.4606 24.108 66.7086 24.912 65.7406 25.496C64.7726 26.072 63.6406 26.36 62.3446 26.36ZM62.3446 23.648C63.4966 23.648 64.3526 23.264 64.9126 22.496C65.4726 21.728 65.7526 20.736 65.7526 19.52C65.7526 18.264 65.4686 17.264 64.9006 16.52C64.3326 15.768 63.4806 15.392 62.3446 15.392C61.5686 15.392 60.9286 15.568 60.4246 15.92C59.9286 16.264 59.5606 16.748 59.3206 17.372C59.0806 17.988 58.9606 18.704 58.9606 19.52C58.9606 20.776 59.2446 21.78 59.8126 22.532C60.3886 23.276 61.2326 23.648 62.3446 23.648ZM75.9806 26.36C74.6846 26.36 73.5526 26.068 72.5846 25.484C71.6166 24.9 70.8646 24.096 70.3286 23.072C69.8006 22.04 69.5366 20.856 69.5366 19.52C69.5366 18.16 69.8086 16.968 70.3526 15.944C70.8966 14.92 71.6526 14.12 72.6206 13.544C73.5886 12.968 74.7086 12.68 75.9806 12.68C77.2846 12.68 78.4206 12.972 79.3886 13.556C80.3566 14.14 81.1086 14.948 81.6446 15.98C82.1806 17.004 82.4486 18.184 82.4486 19.52C82.4486 20.864 82.1766 22.052 81.6326 23.084C81.0966 24.108 80.3446 24.912 79.3766 25.496C78.4086 26.072 77.2766 26.36 75.9806 26.36ZM75.9806 23.648C77.1326 23.648 77.9886 23.264 78.5486 22.496C79.1086 21.728 79.3886 20.736 79.3886 19.52C79.3886 18.264 79.1046 17.264 78.5366 16.52C77.9686 15.768 77.1166 15.392 75.9806 15.392C75.2046 15.392 74.5646 15.568 74.0606 15.92C73.5646 16.264 73.1966 16.748 72.9566 17.372C72.7166 17.988 72.5966 18.704 72.5966 19.52C72.5966 20.776 72.8806 21.78 73.4486 22.532C74.0246 23.276 74.8686 23.648 75.9806 23.648ZM88.5918 26.36C86.9918 26.36 85.6918 26 84.6918 25.28C83.6918 24.56 83.0838 23.548 82.8678 22.244L85.8198 21.788C85.9718 22.428 86.3078 22.932 86.8278 23.3C87.3478 23.668 88.0038 23.852 88.7958 23.852C89.4918 23.852 90.0278 23.716 90.4038 23.444C90.7878 23.164 90.9798 22.784 90.9798 22.304C90.9798 22.008 90.9078 21.772 90.7638 21.596C90.6278 21.412 90.3238 21.236 89.8518 21.068C89.3798 20.9 88.6558 20.688 87.6798 20.432C86.5918 20.144 85.7278 19.836 85.0878 19.508C84.4478 19.172 83.9878 18.776 83.7078 18.32C83.4278 17.864 83.2878 17.312 83.2878 16.664C83.2878 15.856 83.4998 15.152 83.9238 14.552C84.3478 13.952 84.9398 13.492 85.6998 13.172C86.4598 12.844 87.3558 12.68 88.3878 12.68C89.3958 12.68 90.2878 12.836 91.0638 13.148C91.8478 13.46 92.4798 13.904 92.9598 14.48C93.4398 15.056 93.7358 15.732 93.8478 16.508L90.8958 17.036C90.8238 16.484 90.5718 16.048 90.1398 15.728C89.7158 15.408 89.1478 15.228 88.4358 15.188C87.7558 15.148 87.2078 15.252 86.7918 15.5C86.3758 15.74 86.1678 16.08 86.1678 16.52C86.1678 16.768 86.2518 16.98 86.4198 17.156C86.5878 17.332 86.9238 17.508 87.4278 17.684C87.9398 17.86 88.6998 18.076 89.7078 18.332C90.7398 18.596 91.5638 18.9 92.1798 19.244C92.8038 19.58 93.2518 19.984 93.5238 20.456C93.8038 20.928 93.9438 21.5 93.9438 22.172C93.9438 23.476 93.4678 24.5 92.5158 25.244C91.5718 25.988 90.2638 26.36 88.5918 26.36ZM102.968 26C102.112 26.16 101.272 26.228 100.448 26.204C99.6322 26.188 98.9002 26.04 98.2522 25.76C97.6042 25.472 97.1122 25.02 96.7762 24.404C96.4802 23.844 96.3242 23.272 96.3082 22.688C96.2922 22.104 96.2842 21.444 96.2842 20.708V9.44H99.1642V20.54C99.1642 21.06 99.1682 21.516 99.1762 21.908C99.1922 22.3 99.2762 22.62 99.4282 22.868C99.7162 23.348 100.176 23.616 100.808 23.672C101.44 23.728 102.16 23.696 102.968 23.576V26ZM93.9322 15.308V13.04H102.968V15.308H93.9322ZM104.795 11.072V8.42H107.687V11.072H104.795ZM104.795 26V13.04H107.687V26H104.795ZM125.646 26V18.128C125.646 17.24 125.426 16.548 124.986 16.052C124.546 15.548 123.95 15.296 123.198 15.296C122.734 15.296 122.318 15.404 121.95 15.62C121.582 15.828 121.29 16.14 121.074 16.556C120.858 16.964 120.75 17.452 120.75 18.02L119.466 17.264C119.458 16.368 119.658 15.58 120.066 14.9C120.482 14.212 121.042 13.676 121.746 13.292C122.45 12.908 123.234 12.716 124.098 12.716C125.53 12.716 126.626 13.148 127.386 14.012C128.154 14.868 128.538 15.996 128.538 17.396V26H125.646ZM110.058 26V13.04H112.614V17.06H112.974V26H110.058ZM117.87 26V18.164C117.87 17.26 117.65 16.556 117.21 16.052C116.77 15.548 116.17 15.296 115.41 15.296C114.674 15.296 114.082 15.548 113.634 16.052C113.194 16.556 112.974 17.212 112.974 18.02L111.678 17.156C111.678 16.316 111.886 15.56 112.302 14.888C112.718 14.216 113.278 13.688 113.982 13.304C114.694 12.912 115.49 12.716 116.37 12.716C117.338 12.716 118.146 12.924 118.794 13.34C119.45 13.748 119.938 14.308 120.258 15.02C120.586 15.724 120.75 16.52 120.75 17.408V26H117.87Z" fill="#020407"/></svg>
          </a>
          <nav class="menu">
            <ul class="flex max-[1024px]:flex-col min-[1025px]:items-center gap-13 max-[1023px]:gap-8">
              <li><a ontouchstart href="/#agency" class="header-menu-link">Agency</a></li>
              <li><a ontouchstart href="/#case-study" class="header-menu-link">Case study</a></li>
              <li><a ontouchstart href="/#testimonials" class="header-menu-link">Testimonials</a></li>
              <li><a ontouchstart href="/#faq" class="header-menu-link">FAQ’s</a></li>
              <li><a ontouchstart href="/#resources" class="header-menu-link">Resources</a></li>
            </ul>
          </nav>
        </div>
        <div data-da=".menu, 1023, 2" class="flex items-center gap-2">
          <a ontouchstart href="/" class="text-base hover:text-white active:text-white leading-[140%] hover:bg-primary active:bg-primary px-8 py-3 border rounded-full transition-colors duration-200 easy-out">
            Get started
          </a>
          <a ontouchstart href="/" class="bg-primary hover:opacity-50 active:opacity-50 p-3 rounded-full transition-opacity duration-200 ease-out">
            <img src="<?php echo get_parent_theme_file_uri( 'assets/img/icons/ring.svg' ) ?>" alt="">
          </a>
        </div>
        <button class="relative border-secondary min-[1024px]:hidden border rounded-full w-12 h-12 shrink-0">
          <span class="top-4.5 left-1/2 absolute content-[''] bg-primary rounded-full w-6 h-0.5 -translate-x-1/2"></span>
          <span class="bottom-4.5 left-1/2 absolute content-[''] bg-primary rounded-full w-6 h-0.5 -translate-x-1/2"></span>
        </button>
      </div>
    </header>
    <main class="flex-auto">
      