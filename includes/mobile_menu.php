<div id="mobileMenuBackdrop" class="fixed inset-0 z-[60] invisible opacity-0 transition-all duration-300">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm"></div>
    <div id="mobileMenuPanel"
      class="absolute bottom-0 inset-x-0 bg-white dark:bg-slate-900 rounded-t-3xl p-6 shadow-2xl transform translate-y-full transition-transform duration-300">
      <div class="flex justify-between items-center mb-6">
        <span class="text-lg font-bold">Navigation</span>
        <button id="mobileMenuClose" class="p-2 rounded-full bg-slate-100 dark:bg-slate-800">
          <i class="ph ph-x text-lg"></i>
        </button>
      </div>
      <nav class="grid gap-3">
        <a href="#about"
          class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex items-center gap-3">
          <i class="ph ph-user text-primary-500"></i> About
        </a>
        <a href="#projects"
          class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex items-center gap-3">
          <i class="ph ph-rocket-launch text-primary-500"></i> Projects
        </a>
        <a href="#skills"
          class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex items-center gap-3">
          <i class="ph ph-lightning text-primary-500"></i> Skills
        </a>
        <a href="#" role="button" aria-haspopup="dialog" data-open="contactModal"
          class="p-4 rounded-2xl bg-primary-600 text-white font-semibold flex items-center justify-center gap-2 mt-2">
          <i class="ph ph-paper-plane-tilt"></i> Contact Me
        </a>
      </nav>
    </div>
  </div>