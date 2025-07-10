<div>
    <!-- Hero -->
    <section class="text-center py-20 px-4 bg-gradient-to-r from-blue-50 to-blue-100">
        <h2 class="text-4xl font-bold mb-2">Hi, I'm {{ explode(' ', $user['name'])[0] }} 👋</h2>
        <span class="font-bold">{{ $user['title'] }}</span>
        <div class="max-w-6xl mx-auto mt-2">
            <p class="text-base text-justify text-gray-600 mb-6">{{ $user['description'] }}</p>
        </div>
        <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700">Download CV</a>
    </section>
    {{-- Hero End --}}

    <!-- Skill -->
    <section id="skills" class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-2xl font-semibold mb-6 border-b pb-2">🛠️ Skill</h3>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Livewire</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Vue.js</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Tailwind CSS</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Golang</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Docker</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">MySQL</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">REST API</span>
            </div>
        </div>
    </section>
    {{-- Skill End --}}

    <!-- Project -->
    <section id="projects" class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-2xl font-semibold mb-6 border-b pb-2">🚀 Project</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow hover:shadow-md transition p-4">
                    <h4 class="font-semibold text-lg">AI Quote Generator</h4>
                    <p class="text-sm text-gray-600 mb-2">Python + FastAPI + Docker</p>
                    <p>Platform untuk menghasilkan kutipan otomatis dengan model open-source LLM. Support API dan UI.
                    </p>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-md transition p-4">
                    <h4 class="font-semibold text-lg">Sistem Booking Futsal</h4>
                    <p class="text-sm text-gray-600 mb-2">Laravel 11 + Livewire</p>
                    <p>Aplikasi pemesanan lapangan realtime dengan integrasi payment gateway dan notifikasi WhatsApp.
                    </p>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-md transition p-4">
                    <h4 class="font-semibold text-lg">Dashboard Mikrotik</h4>
                    <p class="text-sm text-gray-600 mb-2">CodeIgniter 3 + InfluxDB</p>
                    <p>Menampilkan data trafik jaringan secara real-time untuk ISP lokal.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Project End --}}

    <!-- Experience -->
    <section id="experience" class="py-16 max-w-6xl mx-auto px-4">
        <h3 class="text-2xl font-semibold mb-6 border-b pb-2">💼 Experience</h3>
        <div class="space-y-6">
            <div>
                <h4 class="text-lg font-semibold">Software Engineer — PT. Solusi Digital</h4>
                <p class="text-sm text-gray-600">2022 - Sekarang</p>
                <p>Mengembangkan aplikasi ERP berbasis Laravel & Vue.js. Meningkatkan performa API sebesar 60% melalui
                    refactoring dan caching.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold">Backend Intern — Startup XYZ</h4>
                <p class="text-sm text-gray-600">2021 - 2022</p>
                <p>Merancang REST API dengan FastAPI dan PostgreSQL. Berkontribusi dalam Project open-source internal.
                </p>
            </div>
        </div>
    </section>
    {{-- Experience End --}}

    <!-- Education -->
    <section id="education" class="py-16 max-w-6xl mx-auto px-4">
        <h3 class="text-2xl font-semibold mb-6 border-b pb-2">🎓 Education</h3>
        <div>
            <h4 class="text-lg font-semibold">Universitas Teknologi Indonesia</h4>
            <p class="text-sm text-gray-600">S1 Teknik Informatika · 2018 - 2022</p>
            <p class="mt-2">Lulus dengan predikat cumlaude. Fokus pada sistem terdistribusi dan pengembangan web
                modern.</p>
        </div>
    </section>
    {{-- Education End --}}

    <!-- Achievement -->
    <section id="achievements" class="py-16 max-w-6xl mx-auto px-4">
        <h3 class="text-2xl font-semibold mb-6 border-b pb-2">🏅 Achievement</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-700">
            <li>Juara 1 Hackathon Web Nasional 2023</li>
            <li>Top Contributor Laravel Indonesia Forum 2022</li>
            <li>Mendapatkan sertifikasi AWS Cloud Practitioner</li>
        </ul>
    </section>
    {{-- Achievement End --}}
</div>
