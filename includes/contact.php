<section class="py-20 relative">
      <div class="container max-w-6xl">
        <div class="relative group">
          <!-- Premium Backdrop Glow -->
          <div
            class="absolute -inset-1 bg-gradient-to-r from-primary-500 to-indigo-500 rounded-[3rem] blur-2xl opacity-20 group-hover:opacity-40 transition duration-1000">
          </div>

          <!-- Outer Glass Card Container -->
          <div
            class="relative rounded-[2.5rem] bg-slate-900/80 backdrop-blur-3xl border border-white/10 dark:border-slate-700/50 overflow-hidden shadow-2xl h-[450px] md:h-[550px] ring-1 ring-white/10 p-[2px]">

            <div class="absolute inset-1 rounded-[2.4rem] overflow-hidden bg-slate-900">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15668.618605706247!2d106.66668705000001!3d11.10260485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d17273d72b17%3A0x64bf2eb7dc882352!2zQsOsbmggRMawxqFuZywgVmnhu4d0IE5hbQ!5e1!3m2!1svi!2s!4v1709927602015!5m2!1svi!2s&maptype=satellite"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="absolute inset-0 grayscale-[40%] brightness-75 contrast-125 group-hover:grayscale-0 group-hover:brightness-100 transition-all duration-1000 transform group-hover:scale-105">
              </iframe>

              <!-- Premium Gradient Overlay -->
              <div
                class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/40 to-transparent pointer-events-none">
              </div>

              <div class="absolute inset-x-0 bottom-0 p-8 md:p-12 pointer-events-none">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                  <div class="space-y-4">
                    <div
                      class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] md:text-xs font-semibold tracking-[0.2em] uppercase shadow-lg">
                      <span class="relative flex h-2 w-2">
                        <span
                          class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                      </span>
                      Open for opportunities
                    </div>
                    <h2
                      class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-white drop-shadow-2xl tracking-tight leading-tight">
                      <?= env('CONTACT_ADDRESS') ?>
                    </h2>
                    <p class="text-slate-300 text-base md:text-lg font-medium tracking-wide drop-shadow mt-2">
                      Available for remote work worldwide.
                    </p>
                  </div>

                  <div class="pointer-events-auto h-full flex flex-col justify-end">
                    <a href="#contact"
                      class="px-8 py-4 rounded-2xl bg-white/10 backdrop-blur-xl border border-white/20 text-white font-bold hover:bg-white hover:text-slate-900 transition-all duration-500 shadow-[0_8px_30px_rgb(0,0,0,0.12)] hover:shadow-[0_8px_30px_rgba(255,255,255,0.2)] hover:-translate-y-1">
                      Let's Talk
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>