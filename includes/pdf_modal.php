<div id="pdfModal" class="fixed inset-0 z-[100] hidden">
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity" data-close="true"></div>
    <div
      class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] max-w-md bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-2xl border border-white/10 transform transition-all scale-100">
      <button class="absolute top-4 right-4 p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-700"
        data-close="true">
        <i class="ph ph-x text-xl"></i>
      </button>
      <div class="text-center mb-6">
        <div
          class="w-16 h-16 bg-blue-50 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">
          📄
        </div>
        <h3 class="text-2xl font-bold">Profile PDF</h3>
        <p class="text-slate-500 mt-2 text-sm">
          I'm currently polishing the PDF version to ensure it's pixel-perfect.
        </p>
      </div>
      <div
        class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-xl text-sm text-slate-600 dark:text-slate-400 mb-6 border border-slate-100 dark:border-slate-700">
        "<?= env('USER_NICKNAME') ?> is coding this feature right now. Please email me for the direct file!"
      </div>
      <div class="flex flex-col gap-3">
        <a href="mailto:<?= env('CONTACT_EMAIL') ?>"
          class="w-full py-3 rounded-xl bg-primary-600 text-white font-semibold text-center hover:bg-primary-700">
          Request via Email
        </a>
        <button
          class="w-full py-3 rounded-xl border border-slate-200 dark:border-slate-600 font-medium hover:bg-slate-50 dark:hover:bg-slate-700"
          data-close="true">
          Close
        </button>
      </div>
    </div>
  </div>