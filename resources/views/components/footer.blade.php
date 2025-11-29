<footer class="border-t border-neutral-200">
    <div class="py-12 lg:py-16 px-6 lg:px-16">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-8">
            {{-- Logo --}}
            <div>
                <img src="/logo.svg" alt="Adria Motors" class="h-12 w-auto mx-auto lg:mx-0" />
            </div>

            {{-- Contact Info --}}
            <div class="text-center lg:text-right">
                <a href="tel:+385953618802" class="block text-lg text-neutral-900 hover:text-accent transition-colors mb-1">
                    +385 95 361 8802
                </a>
                <a href="mailto:info@adriamotors.hr" class="block text-neutral-600 hover:text-accent transition-colors">
                    info@adriamotors.hr
                </a>
            </div>
        </div>
    </div>

    <div class="border-t border-neutral-200 py-6 px-6 lg:px-16 text-center text-neutral-500 text-sm">
        <p>&copy; {{ date('Y') }} Adria Motors. Sva prava pridržana.</p>
    </div>
</footer>
