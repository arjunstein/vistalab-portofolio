<header x-data="{ open: false }" class="bg-white shadow sticky top-0 z-50">
    <div x-cloak class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Arjun Gunawan</h1>

        <!-- Desktop menu -->
        <nav class="hidden md:flex space-x-4 text-sm">
            <a href="#skills" class="text-base hover:text-blue-600">Skills</a>
            <a href="#experience" class="text-base hover:text-blue-600">Experience</a>
            <a href="#education" class="text-base hover:text-blue-600">Education</a>
            <a href="#projects" class="text-base hover:text-blue-600">Project</a>
            <a href="#achievements" class="text-base hover:text-blue-600">Achievement</a>
        </nav>

        <!-- Mobile Hamburger -->
        <button @click="open = !open" class="md:hidden focus:outline-none">
            <!-- Hamburger Icon -->
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Close Icon -->
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile menu with transition -->
    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4" class="md:hidden px-4 pb-4 space-y-2 text-sm">
        <a @click="open = false" href="#skills" class="block hover:text-blue-600">Skills</a>
        <a @click="open = false" href="#experience" class="block hover:text-blue-600">Experience</a>
        <a @click="open = false" href="#education" class="block hover:text-blue-600">Education</a>
        <a @click="open = false" href="#projects" class="block hover:text-blue-600">Project</a>
        <a @click="open = false" href="#achievements" class="block hover:text-blue-600">Achievement</a>
    </div>
    <!-- Mobile menu with transition End -->
</header>
