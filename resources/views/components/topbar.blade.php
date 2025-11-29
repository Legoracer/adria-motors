<header class="flex justify-between items-center px-6 py-0 lg:px-16 lg:py-0 border-b border-neutral-200 bg-white sticky top-0 z-50">
    {{-- Logo --}}
    <a href="/" class="block">
        <img src="/logo.svg" alt="Adria Motors" class="h-32 lg:h-24 w-auto" />
    </a>

    {{-- CTA Button --}}
    <a 
        href="{{ $ctaLink ?? '#' }}" 
        class="inline-flex items-center gap-2 lg:gap-3 px-5 py-3 lg:px-8 lg:py-4 bg-accent text-white font-semibold text-xs lg:text-sm tracking-wide uppercase transition-all duration-300 hover:bg-accent-dark group"
        target="_blank" 
        rel="noopener"
    >
        {{ $ctaText ?? 'Provjeri ponudu vozila' }}
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-4 h-4 lg:w-5 lg:h-5 transition-transform duration-300 group-hover:translate-x-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
        </svg>
    </a>
</header>
