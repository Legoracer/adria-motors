<section class="py-16 lg:py-20 px-6 lg:px-16 bg-neutral-100">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="font-[family-name:var(--font-display)] text-3xl lg:text-5xl tracking-wider mb-4 text-neutral-900">
                {{ $title }}
            </h2>
            <p class="text-base lg:text-lg text-neutral-600 max-w-2xl mx-auto">
                {{ $description }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-3xl mx-auto">
            {{-- Working Hours --}}
            <div class="bg-white border border-neutral-200 p-6 lg:p-8 text-center h-full flex flex-col justify-center">
                <h3 class="font-[family-name:var(--font-display)] text-xl lg:text-2xl tracking-wider mb-4 text-accent">
                    Radno vrijeme
                </h3>
                <ul class="space-y-2 text-neutral-600">
                    <li>
                        <span>Pon - Pet:</span>
                        <span class="text-neutral-900 font-medium ml-2">08:00 – 20:00</span>
                    </li>
                    <li>
                        <span>Subota:</span>
                        <span class="text-neutral-900 font-medium ml-2">08:00 – 20:00</span>
                    </li>
                    <li>
                        <span>Nedjelja:</span>
                        <span class="text-neutral-900 font-medium ml-2">09:00 – 15:00</span>
                    </li>
                </ul>
            </div>

            {{-- Phone --}}
            <div class="bg-white border border-neutral-200 p-6 lg:p-8 text-center h-full flex flex-col justify-center">
                <h3 class="font-[family-name:var(--font-display)] text-xl lg:text-2xl tracking-wider mb-4 text-accent">
                    Kontakt telefon
                </h3>
                <a href="tel:+385953618802" class="text-2xl lg:text-3xl font-bold text-neutral-900 hover:text-accent transition-colors">
                    095 361 8802
                </a>
            </div>
        </div>
    </div>
</section>
