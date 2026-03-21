<section class="relative min-h-[90vh] flex items-center justify-center py-12 md:py-20">
      <div
        class="absolute top-[-20%] right-[-10%] w-[500px] h-[500px] bg-primary-200/40 rounded-full blur-[100px] animate-pulse dark:bg-primary-900/20">
      </div>
      <div
        class="absolute bottom-[-10%] left-[-10%] w-[400px] h-[400px] bg-purple-200/40 rounded-full blur-[100px] dark:bg-indigo-900/20">
      </div>
      <div class="container grid lg:grid-cols-12 gap-12 items-center relative z-10">
        <div class="lg:col-span-7 space-y-8 text-center lg:text-left" data-aos="fade-up">
          <div
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 shadow-sm backdrop-blur-sm">
            <span class="relative flex h-2 w-2">
              <span
                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
            </span>
            <span class="text-xs font-semibold tracking-wide text-slate-600 dark:text-slate-300 uppercase">
              <?= env('USER_ROLE') ?>
            </span>
          </div>
          <h1
            class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight leading-[1.1] text-slate-900 dark:text-white">
            <?= env('USER_NAME') ?>
          </h1>
          <p class="text-lg md:text-xl text-slate-600 dark:text-slate-400 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
            <?= env('USER_ABOUT') ?>
            My work combines <b>coding practice</b>, <b>game development experiments</b>,
            and <b>continuous learning</b> as I grow as a developer.
          </p>

          <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4">
            <a href="#projects"
              class="px-8 py-4 rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-bold shadow-lg hover:scale-105 transition-transform">
              View My Work
            </a>
            <a href="#" role="button" aria-haspopup="dialog" data-open="pdfModal"
              class="px-8 py-4 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 font-semibold hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors flex items-center gap-2">
              <i class="ph ph-download-simple"></i> Download Profile (PDF)
            </a>
          </div>

          <!-- Social Links -->
          <div class="flex items-center justify-center lg:justify-start gap-4 pt-4">
            <a href="<?= env('SOCIAL_FACEBOOK') ?>" target="_blank" rel="noopener noreferrer"
              class="group relative flex items-center justify-center w-12 h-12 rounded-full bg-white/50 dark:bg-slate-800/50 border border-slate-200/50 dark:border-slate-700/50 backdrop-blur-md shadow-sm hover:shadow-lg hover:shadow-blue-500/20 hover:-translate-y-1 hover:border-blue-400/50 dark:hover:border-blue-500/50 transition-all duration-300"
              aria-label="Facebook">
              <span
                class="absolute -top-10 scale-95 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-200 pointer-events-none bg-slate-800 dark:bg-white text-white dark:text-slate-900 text-xs font-semibold py-1 px-2.5 rounded-lg shadow-md whitespace-nowrap">
                Facebook
                <span
                  class="absolute bottom-[-4px] left-1/2 -translate-x-1/2 w-2 h-2 bg-slate-800 dark:bg-white rotate-45"></span>
              </span>
              <div
                class="absolute inset-0 rounded-full bg-blue-500/10 dark:bg-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              </div>
              <i
                class="ph-fill ph-facebook-logo text-2xl text-blue-600 dark:text-blue-400 md:text-slate-600 md:dark:text-slate-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors relative z-10"></i>
            </a>

            <a href="<?= env('SOCIAL_ZALO') ?>" target="_blank" rel="noopener noreferrer"
              class="group relative flex items-center justify-center w-12 h-12 rounded-full bg-white/50 dark:bg-slate-800/50 border border-slate-200/50 dark:border-slate-700/50 backdrop-blur-md shadow-sm hover:shadow-lg hover:shadow-blue-500/20 hover:-translate-y-1 hover:border-blue-400/50 dark:hover:border-blue-500/50 transition-all duration-300"
              aria-label="Zalo">
              <span
                class="absolute -top-10 scale-95 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-200 pointer-events-none bg-slate-800 dark:bg-white text-white dark:text-slate-900 text-xs font-semibold py-1 px-2.5 rounded-lg shadow-md whitespace-nowrap">
                Zalo
                <span
                  class="absolute bottom-[-4px] left-1/2 -translate-x-1/2 w-2 h-2 bg-slate-800 dark:bg-white rotate-45"></span>
              </span>
              <div
                class="absolute inset-0 rounded-full bg-blue-500/10 dark:bg-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              </div>
              <img src="img/zalo.png" alt="Zalo"
                class="w-6 h-6 object-contain relative z-10 grayscale-0 opacity-100 md:grayscale md:opacity-70 md:group-hover:grayscale-0 md:group-hover:opacity-100 transition-all duration-300">
            </a>

            <a href="<?= env('SOCIAL_INSTAGRAM') ?>" target="_blank" rel="noopener noreferrer"
              class="group relative flex items-center justify-center w-12 h-12 rounded-full bg-white/50 dark:bg-slate-800/50 border border-slate-200/50 dark:border-slate-700/50 backdrop-blur-md shadow-sm hover:shadow-lg hover:shadow-pink-500/20 hover:-translate-y-1 hover:border-pink-400/50 dark:hover:border-pink-500/50 transition-all duration-300"
              aria-label="Instagram">
              <span
                class="absolute -top-10 scale-95 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-200 pointer-events-none bg-slate-800 dark:bg-white text-white dark:text-slate-900 text-xs font-semibold py-1 px-2.5 rounded-lg shadow-md whitespace-nowrap">
                Instagram
                <span
                  class="absolute bottom-[-4px] left-1/2 -translate-x-1/2 w-2 h-2 bg-slate-800 dark:bg-white rotate-45"></span>
              </span>
              <div
                class="absolute inset-0 rounded-full bg-gradient-to-tr from-yellow-400/10 via-pink-500/10 to-purple-500/10 dark:from-yellow-400/20 dark:via-pink-500/20 dark:to-purple-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              </div>
              <i
                class="ph-fill ph-instagram-logo text-2xl text-pink-600 dark:text-pink-400 md:text-slate-600 md:dark:text-slate-400 group-hover:text-pink-600 dark:group-hover:text-pink-400 transition-colors relative z-10"></i>
            </a>

            <a href="<?= env('SOCIAL_TIKTOK') ?>" target="_blank" rel="noopener noreferrer"
              class="group relative flex items-center justify-center w-12 h-12 rounded-full bg-white/50 dark:bg-slate-800/50 border border-slate-200/50 dark:border-slate-700/50 backdrop-blur-md shadow-sm hover:shadow-lg hover:shadow-slate-500/20 hover:-translate-y-1 hover:border-slate-400/50 dark:hover:border-slate-500/50 transition-all duration-300"
              aria-label="TikTok">
              <span
                class="absolute -top-10 scale-95 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-200 pointer-events-none bg-slate-800 dark:bg-white text-white dark:text-slate-900 text-xs font-semibold py-1 px-2.5 rounded-lg shadow-md whitespace-nowrap">
                TikTok
                <span
                  class="absolute bottom-[-4px] left-1/2 -translate-x-1/2 w-2 h-2 bg-slate-800 dark:bg-white rotate-45"></span>
              </span>
              <div
                class="absolute inset-0 rounded-full bg-slate-500/10 dark:bg-slate-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              </div>
              <i
                class="ph-fill ph-tiktok-logo text-2xl text-slate-900 dark:text-white md:text-slate-600 md:dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition-colors relative z-10"></i>
            </a>
            
            <a href="<?= env('SOCIAL_GITHUB') ?>" target="_blank" rel="noopener noreferrer"
              class="group relative flex items-center justify-center w-12 h-12 rounded-full bg-white/50 dark:bg-slate-800/50 border border-slate-200/50 dark:border-slate-700/50 backdrop-blur-md shadow-sm hover:shadow-lg hover:shadow-slate-800/20 hover:-translate-y-1 hover:border-slate-800/50 dark:hover:border-slate-600/50 transition-all duration-300"
              aria-label="GitHub">
              <span
                class="absolute -top-10 scale-95 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-200 pointer-events-none bg-slate-800 dark:bg-white text-white dark:text-slate-900 text-xs font-semibold py-1 px-2.5 rounded-lg shadow-md whitespace-nowrap">
                GitHub
                <span
                  class="absolute bottom-[-4px] left-1/2 -translate-x-1/2 w-2 h-2 bg-slate-800 dark:bg-white rotate-45"></span>
              </span>
              <div
                class="absolute inset-0 rounded-full bg-slate-800/10 dark:bg-slate-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              </div>
              <i
                class="ph-fill ph-github-logo text-2xl text-slate-900 dark:text-white md:text-slate-600 md:dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white transition-colors relative z-10"></i>
            </a>

            <a href="<?= env('SOCIAL_LOCKET') ?>" target="_blank" rel="noopener noreferrer"
              class="group relative flex items-center justify-center w-12 h-12 rounded-full bg-white/50 dark:bg-slate-800/50 border border-slate-200/50 dark:border-slate-700/50 backdrop-blur-md shadow-sm hover:shadow-lg hover:shadow-yellow-500/20 hover:-translate-y-1 hover:border-yellow-400/50 dark:hover:border-yellow-500/50 transition-all duration-300"
              aria-label="Locket">
              <span
                class="absolute -top-10 scale-95 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-200 pointer-events-none bg-slate-800 dark:bg-white text-white dark:text-slate-900 text-xs font-semibold py-1 px-2.5 rounded-lg shadow-md whitespace-nowrap">
                Locket
                <span
                  class="absolute bottom-[-4px] left-1/2 -translate-x-1/2 w-2 h-2 bg-slate-800 dark:bg-white rotate-45"></span>
              </span>
              <div
                class="absolute inset-0 rounded-full bg-yellow-500/10 dark:bg-yellow-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              </div>
              <img src="img/locket.jpg" alt="Locket"
                class="w-5 h-5 object-contain rounded relative z-10 grayscale-0 opacity-100 md:grayscale md:opacity-70 md:group-hover:grayscale-0 md:group-hover:opacity-100 transition-all duration-300">
            </a>
          </div>
          <!-- Contact Pills -->
          <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3 pt-2 text-sm text-slate-500">
            <span
              class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/60 dark:bg-slate-800/60 border border-slate-100 dark:border-slate-700 backdrop-blur-sm">
              <i class="ph ph-envelope"></i>
              <?= env('CONTACT_EMAIL') ?>
            </span>
            <span
              class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/60 dark:bg-slate-800/60 border border-slate-100 dark:border-slate-700 backdrop-blur-sm">
              <i class="ph ph-phone"></i> <?= env('CONTACT_PHONE') ?>
            </span>
            <span
              class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/60 dark:bg-slate-800/60 border border-slate-100 dark:border-slate-700 backdrop-blur-sm">
              <i class="ph ph-calendar-check"></i> Updated May 2026
            </span>
          </div>

          <!-- Developer IDE Snippet -->
          <div
            class="pt-8 w-full max-w-sm mx-auto lg:mx-0 transform hover:-translate-y-1 transition-transform duration-500">
            <div
              class="rounded-xl bg-slate-900 border border-slate-700/80 shadow-2xl overflow-hidden font-mono text-left text-xs md:text-sm leading-relaxed relative">
              <!-- Glow outline -->
              <div
                class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 opacity-0 hover:opacity-100 transition-opacity duration-500 pointer-events-none">
              </div>

              <!-- Mac OS terminal header -->
              <div class="flex items-center px-4 py-2.5 border-b border-slate-800 bg-slate-950/50">
                <div class="flex space-x-1.5">
                  <div class="w-2.5 h-2.5 rounded-full bg-red-500/80 shadow-[0_0_5px_rgba(239,68,68,0.5)]"></div>
                  <div class="w-2.5 h-2.5 rounded-full bg-yellow-500/80 shadow-[0_0_5px_rgba(234,179,8,0.5)]"></div>
                  <div class="w-2.5 h-2.5 rounded-full bg-green-500/80 shadow-[0_0_5px_rgba(34,197,94,0.5)]"></div>
                </div>
                <div class="ml-3 text-[10px] uppercase tracking-wider text-slate-500 font-semibold select-none"><?= env('USER_NICKNAME') ?>.js
                </div>
              </div>

              <!-- Code Body -->
              <div class="p-4 text-slate-300">
                <p><span class="text-pink-400 font-semibold">const</span> <span class="text-yellow-300">developer</span>
                  <span class="text-pink-400">=</span> {
                </p>
                <div class="pl-4 py-1 border-l-2 border-slate-700/50 ml-1.5">
                  <p><span class="text-blue-300">name</span>: <span class="text-green-300">'<?= env('USER_NAME') ?>'</span>,</p>
                  <p><span class="text-blue-300">role</span>: <span class="text-green-300">'Fullstack Developer'</span>,
                  </p>
                  <p><span class="text-blue-300">debug</span>: <span class="text-orange-400">Infinity</span>,</p>
                  <p><span class="text-blue-300">status</span>: <span class="text-green-400">'Building awesome
                      things'</span></p>
                </div>
                <p>};</p>
                <p class="mt-2 text-slate-500 italic select-none"><em>// Execute mission...</em></p>
                <p class="mt-1"><span class="text-blue-400 font-medium">console</span>.<span
                    class="text-yellow-200">log</span>(developer.<span class="text-blue-300">status</span>);<span
                    class="ml-1 inline-block w-2 h-3.5 bg-primary-400 align-middle animate-[pulse_1s_step-end_infinite]"></span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="lg:col-span-5 relative" data-aos="zoom-in-left" data-aos-delay="200">
          <div
            class="absolute inset-0 bg-gradient-to-tr from-primary-500 to-purple-500 rounded-[2rem] rotate-6 opacity-20 blur-lg">
          </div>
          <div class="relative rounded-[2rem] overflow-hidden border border-white/20 shadow-2xl animate-float">
            <img src="img/<?= env('USER_NICKNAME') ?>.jpg" alt="Profile cover" class="w-full h-auto object-cover" loading="lazy" />
          </div>
        </div>
      </div>
    </section>