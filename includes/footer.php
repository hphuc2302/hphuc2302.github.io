<footer
    class="border-t border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 py-12 relative overflow-hidden">
    <!-- Ambient subtle gradient glow -->
    <div
      class="pointer-events-none absolute inset-0 bg-gradient-to-t from-primary-500/5 to-transparent dark:from-primary-500/10">
    </div>

    <div class="container relative z-10 flex flex-col items-center text-center">
      <div class="mb-6 flex items-center justify-center gap-3">
        <a href="#"
          class="group flex items-center justify-center w-10 h-10 rounded-xl bg-slate-100 dark:bg-slate-800 hover:bg-primary-50 dark:hover:bg-primary-900/50 hover:scale-110 hover:-translate-y-1 transition-all duration-300 border border-slate-200 dark:border-slate-700 hover:border-primary-500/30">
          <i
            class="ph-bold ph-code text-slate-500 dark:text-slate-400 group-hover:text-primary-500 transition-colors"></i>
        </a>
      </div>

      <p class="text-slate-600 dark:text-slate-300 font-medium text-sm">
        &copy; <span id="currentYear">2026</span> <?= env('USER_NAME') ?>. All rights reserved.
      </p>
  </footer>