<section id="about" class="py-20 relative">
  <div class="container max-w-6xl mx-auto">
    <div class="flex flex-col md:flex-row gap-12 lg:gap-20 items-center">
      <div class="w-full md:w-5/12 lg:w-2/5" data-aos="fade-right">
        <div class="relative rounded-[2.5rem] overflow-hidden border-4 border-white dark:border-slate-800 shadow-2xl group rotate-2 hover:rotate-0 transition-transform duration-500">
          <div class="absolute inset-0 bg-primary-500/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
          
          <div class="swiper" id="aboutSwiper">
            <div class="swiper-wrapper">
              <?php for($i = 2; $i <= 9; $i++): ?>
              <div class="swiper-slide">
                <img src="img/<?= $i ?>.jpg" alt="About <?= env('USER_NAME') ?> <?= $i ?>" class="w-full h-auto aspect-[4/5] object-cover grayscale group-hover:grayscale-0 transition-all duration-500 scale-105 group-hover:scale-100" loading="lazy">
              </div>
              <?php endfor; ?>
            </div>
            <div class="swiper-pagination about-swiper-pagination absolute bottom-4 w-full text-center z-20"></div>
          </div>
          
          <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-primary-50 rounded-full blur-2xl z-0 pointer-events-none"></div>
        </div>
        <!-- Floating badge -->
        <div class="absolute bottom-8 -right-4 sm:-right-8 bg-white dark:bg-slate-800 p-4 rounded-2xl shadow-xl border border-slate-100 dark:border-slate-700 z-20 animate-float hidden md:block">
          <div class="flex items-center gap-3">
            <div class="w-12 h-12 rounded-full bg-primary-50 text-primary-600 flex items-center justify-center">
              <i class="ph-fill ph-code text-2xl"></i>
            </div>
            <div>
              <p class="text-sm text-slate-500 dark:text-slate-400 font-medium">Specialized in</p>
              <p class="text-sm font-bold text-slate-900 dark:text-white">Full-Stack Dev</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w-full md:w-7/12 lg:w-3/5" data-aos="fade-left">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary-50 dark:bg-slate-800 text-primary-600 dark:text-primary-400 text-xs font-bold uppercase tracking-wider mb-4 border border-primary-100 dark:border-slate-700">
          <i class="ph-fill ph-user"></i> About Me
        </div>
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
          Hi, I am <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-500 to-purple-500"><?= env('USER_NAME') ?></span>
        </h2>
        
        <div class="space-y-4 text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
          <p>
            <?= env('USER_DESCRIPTION') ?>
          </p>
          <p>
            <?= env('USER_ABOUT') ?> 
            I focus on creating high-quality, efficient, and beautifully designed digital experiences. 
            When I'm not coding, you can find me experimenting with new frameworks or exploring the game development space.
          </p>
        </div>

        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-8 mt-8 border-t border-slate-200 dark:border-slate-800 pt-8">
          <li class="flex items-center gap-3">
            <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-800/50 text-primary-500">
              <i class="ph-fill ph-calendar-blank text-xl"></i>
            </div>
            <div>
              <p class="text-[11px] text-slate-500 uppercase font-bold tracking-wider">Ngày sinh</p>
              <p class="text-slate-900 dark:text-white font-medium"><?= env('USER_DOB') ?></p>
            </div>
          </li>
          <li class="flex items-center gap-3">
            <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-800/50 text-primary-500">
              <i class="ph-fill ph-star text-xl"></i>
            </div>
            <div>
              <p class="text-[11px] text-slate-500 uppercase font-bold tracking-wider">Cung Hoàng Đạo</p>
              <p class="text-slate-900 dark:text-white font-medium"><?= env('USER_ZODIAC') ?></p>
            </div>
          </li>
          <li class="flex items-center gap-3">
            <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-800/50 text-primary-500">
              <i class="ph-fill ph-ruler text-xl"></i>
            </div>
            <div>
              <p class="text-[11px] text-slate-500 uppercase font-bold tracking-wider">Chiều cao</p>
              <p class="text-slate-900 dark:text-white font-medium"><?= env('USER_HEIGHT') ?></p>
            </div>
          </li>
          <li class="flex items-center gap-3">
            <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-800/50 text-primary-500">
              <i class="ph-fill ph-scales text-xl"></i>
            </div>
            <div>
              <p class="text-[11px] text-slate-500 uppercase font-bold tracking-wider">Cân nặng</p>
              <p class="text-slate-900 dark:text-white font-medium"><?= env('USER_WEIGHT') ?></p>
            </div>
          </li>
          <li class="flex items-center gap-3 sm:col-span-2">
            <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-800/50 text-primary-500">
              <i class="ph-fill ph-map-pin text-xl"></i>
            </div>
            <div>
              <p class="text-[11px] text-slate-500 uppercase font-bold tracking-wider">Quê quán</p>
              <p class="text-slate-900 dark:text-white font-medium"><?= env('USER_HOMETOWN') ?></p>
            </div>
          </li>
        </ul>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-8">
          <div class="p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-700/50 hover:-translate-y-1 transition-transform">
            <h4 class="text-3xl font-black text-slate-900 dark:text-white mb-2">3+</h4>
            <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Years Exp.</span>
          </div>
          <div class="p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-700/50 hover:-translate-y-1 transition-transform">
            <h4 class="text-3xl font-black text-slate-900 dark:text-white mb-2">10+</h4>
            <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Projects</span>
          </div>
          <div class="p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-700/50 hover:-translate-y-1 transition-transform">
            <h4 class="text-3xl font-black text-slate-900 dark:text-white mb-2">5+</h4>
            <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Tech Stack</span>
          </div>
          <div class="p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-700/50 hover:-translate-y-1 transition-transform">
            <h4 class="text-3xl font-black text-slate-900 dark:text-white mb-2">100%</h4>
            <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Passion</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
