<section class="py-16 lg:py-20 px-6 lg:px-16">
    <div class="max-w-5xl mx-auto">
        {{-- Section Header --}}
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="font-[family-name:var(--font-display)] text-3xl lg:text-5xl tracking-wider mb-4 text-neutral-900">
                {{ $title }}
            </h2>
            @if(isset($subtitle))
            <p class="text-base lg:text-lg text-neutral-600 max-w-2xl mx-auto">
                {{ $subtitle }}
            </p>
            @endif
        </div>

        {{-- Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-4xl mx-auto items-start">
            {{ $slot }}
        </div>
    </div>
</section>
