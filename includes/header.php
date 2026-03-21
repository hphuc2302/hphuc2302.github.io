<header id="mainHeader" class="fixed top-0 inset-x-0 z-50 transition-all duration-300">
    <div class="absolute inset-0 glass border-b border-slate-200/50 dark:border-slate-800/50 shadow-sm"></div>
    <div class="container relative h-16 md:h-20 flex items-center justify-between">
      <a href="#"
        class="group flex items-center gap-3 font-mono tracking-tight z-10 hover:-translate-y-0.5 transition-transform duration-300">
        <div
          class="relative flex items-center justify-center w-12 h-12 group-hover:scale-110 transition-all duration-300">
          <img src="img/i.gif" alt="logo"
            class="w-full h-full object-contain relative z-10 drop-shadow-md group-hover:drop-shadow-[0_0_8px_rgba(14,165,233,0.5)]" />
        </div>
        <div class="flex flex-col justify-center">
          <div class="flex items-end leading-none">
            <span
              class="text-xl font-bold text-slate-800 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-300"><?= env('USER_NICKNAME') ?></span>
            <span class="w-2 h-4 bg-primary-500 ml-1.5 mb-px animate-[pulse_1s_ease-in-out_infinite]"></span>
          </div>
          <span class="text-[9px] text-slate-500 dark:text-slate-500 uppercase tracking-[0.2em] font-medium mt-1">
          </span>
        </div>
      </a>

      <nav aria-label="Primary" class="hidden md:flex items-center gap-6 z-10">
        <a id="nav-about" href="#about"
          class="nav-link text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
          About
        </a>
        <a id="nav-projects" href="#projects"
          class="nav-link text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
          Projects
        </a>
        <a id="nav-skills" href="#skills"
          class="nav-link text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
          Skills
        </a>

        <div class="h-6 w-px bg-slate-200 dark:bg-slate-700 mx-2"></div>
        <button id="themeToggle" aria-label="Toggle theme"
          class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-slate-600 dark:text-slate-300">
          <i class="ph ph-moon-stars text-lg"></i>
        </button>
        <a href="#" role="button" aria-haspopup="dialog" data-open="contactModal"
          class="px-5 py-2.5 rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-semibold text-sm hover:shadow-lg hover:-translate-y-0.5 transition-all">
          Contact Me
        </a>
      </nav>

      <div class="flex items-center gap-3 md:hidden z-10">
        <button id="themeToggleMobile" aria-label="Toggle theme"
          class="p-2 rounded-xl border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">
          <i class="ph ph-moon-stars text-lg"></i>
        </button>
        <button id="mobileMenuBtn" aria-controls="mobileMenu" aria-expanded="false" aria-label="Open menu"
          class="p-2 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white">
          <i class="ph ph-list text-xl"></i>
        </button>
      </div>
    </div>
  </header>