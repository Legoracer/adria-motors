<section class="py-16 lg:py-28 px-6 lg:px-16 text-center max-w-4xl mx-auto">
    {{-- Hero Logo --}}
    <!-- <div class="mb-8 lg:mb-10 animate-fade-in-up">
        <img src="/logo.svg" alt="Adria Motors" class="h-20 lg:h-32 w-auto mx-auto" />
    </div> -->

    {{-- Title --}}
    @if(isset($title))
    <h1 class="font-[family-name:var(--font-display)] text-5xl lg:text-7xl tracking-wider mb-6 text-neutral-900 animate-fade-in-up">
        {{ $title }}
    </h1>
    @endif

    {{-- Separator --}}
    <div class="w-16 h-1 bg-accent mx-auto mb-8 lg:mb-10 animate-fade-in-up animation-delay-200"></div>

    {{-- Description --}}
    <p class="text-xl lg:text-xl leading-relaxed lg:leading-loose text-neutral-600 max-w-2xl mx-auto animate-fade-in-up animation-delay-400 [&>strong]:text-neutral-900 [&>strong]:font-semibold">
        {{ $slot }}
    </p>
</section> 
