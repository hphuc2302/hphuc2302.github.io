<div id="contactModal" class="fixed inset-0 z-[100] hidden">
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity duration-300 opacity-0 modal-backdrop" data-close="true"></div>
    <div
      class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] max-w-sm bg-white/90 dark:bg-slate-800/90 backdrop-blur-md rounded-3xl p-8 shadow-[0_0_40px_-10px_rgba(14,165,233,0.3)] border border-white/20 dark:border-slate-700/50 transform transition-all duration-500 scale-95 opacity-0 modal-content">
      <button class="absolute top-4 right-4 p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-700 hover:rotate-90 transition-all duration-300"
        data-close="true">
        <i class="ph ph-x text-xl"></i>
      </button>
      <div class="text-center mb-2 mt-4 relative">
        <div class="absolute -top-10 left-1/2 -translate-x-1/2 w-20 h-20 bg-primary-500/20 rounded-full blur-xl animate-pulse"></div>
        <h3 class="text-2xl font-bold mb-8 relative z-10 bg-clip-text text-transparent bg-gradient-to-r from-slate-900 to-slate-500 dark:from-white dark:to-slate-400">Connect with me</h3>
        <div class="flex flex-wrap items-center justify-center gap-4">
          <a href="<?= env('SOCIAL_FACEBOOK') ?>" target="_blank" rel="noopener noreferrer"
             class="group relative flex items-center justify-center w-14 h-14 rounded-full bg-slate-50 dark:bg-slate-900/50 border border-slate-200 dark:border-slate-700 hover:-translate-y-2 transition-all duration-300 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-blue-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
             <i class="ph-fill ph-facebook-logo text-2xl relative z-10 text-blue-600 dark:text-blue-400 md:text-slate-600 md:dark:text-slate-400 group-hover:text-white transition-colors duration-300"></i>
             <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 w-6 h-6 bg-blue-400 rounded-full blur-md opacity-0 group-hover:opacity-50 transition-all duration-300 group-hover:bottom-2"></div>
          </a>
          <a href="<?= env('SOCIAL_ZALO') ?>" target="_blank" rel="noopener noreferrer"
             class="group relative flex items-center justify-center w-14 h-14 rounded-full bg-slate-50 dark:bg-slate-900/50 border border-slate-200 dark:border-slate-700 hover:-translate-y-2 transition-all duration-300 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-tr from-blue-500 to-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
             <img src="img/zalo.png" alt="Zalo" class="w-6 h-6 object-contain relative z-10 grayscale-0 opacity-100 md:grayscale md:opacity-70 group-hover:brightness-0 group-hover:invert md:group-hover:opacity-100 transition-all duration-300">
             <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 w-6 h-6 bg-cyan-400 rounded-full blur-md opacity-0 group-hover:opacity-50 transition-all duration-300 group-hover:bottom-2"></div>
          </a>
          <a href="<?= env('SOCIAL_INSTAGRAM') ?>" target="_blank" rel="noopener noreferrer"
             class="group relative flex items-center justify-center w-14 h-14 rounded-full bg-slate-50 dark:bg-slate-900/50 border border-slate-200 dark:border-slate-700 hover:-translate-y-2 transition-all duration-300 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-tr from-amber-500 via-pink-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
             <i class="ph-fill ph-instagram-logo text-2xl relative z-10 text-pink-600 dark:text-pink-400 md:text-slate-600 md:dark:text-slate-400 group-hover:text-white transition-colors duration-300"></i>
             <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 w-6 h-6 bg-pink-400 rounded-full blur-md opacity-0 group-hover:opacity-50 transition-all duration-300 group-hover:bottom-2"></div>
          </a>
          <a href="<?= env('SOCIAL_TIKTOK') ?>" target="_blank" rel="noopener noreferrer"
             class="group relative flex items-center justify-center w-14 h-14 rounded-full bg-slate-50 dark:bg-slate-900/50 border border-slate-200 dark:border-slate-700 hover:-translate-y-2 transition-all duration-300 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-tr from-slate-900 via-slate-800 to-slate-700 dark:from-white dark:via-slate-200 dark:to-slate-300 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
             <i class="ph-fill ph-tiktok-logo text-2xl relative z-10 text-slate-900 dark:text-white md:text-slate-600 md:dark:text-slate-400 group-hover:text-white dark:group-hover:text-slate-900 transition-colors duration-300"></i>
             <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 w-6 h-6 bg-slate-400 rounded-full blur-md opacity-0 group-hover:opacity-50 transition-all duration-300 group-hover:bottom-2"></div>
          </a>
          <a href="<?= env('SOCIAL_GITHUB') ?>" target="_blank" rel="noopener noreferrer"
             class="group relative flex items-center justify-center w-14 h-14 rounded-full bg-slate-50 dark:bg-slate-900/50 border border-slate-200 dark:border-slate-700 hover:-translate-y-2 transition-all duration-300 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-tr from-slate-800 to-slate-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
             <i class="ph-fill ph-github-logo text-2xl relative z-10 text-slate-900 dark:text-white md:text-slate-600 md:dark:text-slate-400 group-hover:text-white transition-colors duration-300"></i>
             <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 w-6 h-6 bg-slate-500 rounded-full blur-md opacity-0 group-hover:opacity-50 transition-all duration-300 group-hover:bottom-2"></div>
          </a>
          <a href="<?= env('SOCIAL_LOCKET') ?>" target="_blank" rel="noopener noreferrer"
             class="group relative flex items-center justify-center w-14 h-14 rounded-full bg-slate-50 dark:bg-slate-900/50 border border-slate-200 dark:border-slate-700 hover:-translate-y-2 transition-all duration-300 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-tr from-yellow-500 to-amber-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
             <img src="img/locket.jpg" alt="Locket" class="w-6 h-6 object-contain rounded relative z-10 grayscale-0 opacity-100 md:grayscale md:opacity-70 group-hover:brightness-0 group-hover:invert md:group-hover:opacity-100 transition-all duration-300">
             <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 w-6 h-6 bg-yellow-400 rounded-full blur-md opacity-0 group-hover:opacity-50 transition-all duration-300 group-hover:bottom-2"></div>
          </a>
        </div>
      </div>
    </div>
  </div>