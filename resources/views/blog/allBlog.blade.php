<x-layouts.blog>
    <!-- Blog Header -->
    <header class="py-16 md:py-24 bg-brand-navy relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 2px 2px, #bdc3c7 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>
        <div class="max-w-6xl mx-auto px-6 relative z-10 text-center">
            <span class="text-brand-gold text-xs font-black uppercase tracking-[0.4em] mb-4 block">Workshop Journal</span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">Edukasikan <span class="italic text-brand-gold">Style</span> Kendaraanmu</h1>
            <p class="text-brand-silver max-w-2xl mx-auto text-sm md:text-base leading-relaxed">
                Dari teknik pengecatan oven hingga rahasia perawatan coating. Kami berbagi ilmu agar kendaraan Anda tetap tampil prima di jalanan.
            </p>
        </div>
    </header>

    <!-- Categories Tab -->
    <div class="max-w-6xl mx-auto px-6 -mt-8 relative z-20">
        <div class="bg-white p-2 rounded-2xl shadow-xl flex flex-wrap justify-center gap-2 border border-ui-border/50">
            <button class="px-6 py-3 bg-brand-gold text-white text-[10px] font-black uppercase tracking-widest rounded-xl shadow-lg">Semua</button>
            <button class="px-6 py-3 text-brand-navy hover:bg-ui-main text-[10px] font-black uppercase tracking-widest rounded-xl transition-all">Repaint</button>
            <button class="px-6 py-3 text-brand-navy hover:bg-ui-main text-[10px] font-black uppercase tracking-widest rounded-xl transition-all">Body Repair</button>
            <button class="px-6 py-3 text-brand-navy hover:bg-ui-main text-[10px] font-black uppercase tracking-widest rounded-xl transition-all">Tips Perawatan</button>
        </div>
    </div>

    <!-- Main Content: Blog Grid -->
    <main class="max-w-6xl mx-auto px-6 py-20">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Card 1 (Tadi) -->
            <div class="group cursor-pointer">
                <div class="relative h-64 mb-6 overflow-hidden rounded-2xl shadow-sm bg-brand-navy/10 border border-ui-border">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-gold/20 to-brand-navy flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                        <i class="fa-solid fa-paint-roller text-white/10 text-7xl"></i>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-brand-navy text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-widest">Repaint</span>
                    </div>
                </div>
                <div class="px-1">
                    <p class="text-brand-gold text-[10px] font-black uppercase tracking-widest mb-3">Mei 10, 2026</p>
                    <h4 class="text-xl font-extrabold text-brand-navy group-hover:text-brand-gold transition-colors mb-3 leading-snug">
                        Kenapa Cat Oven Lebih Bagus dari Cat Semprot Biasa?
                    </h4>
                    <p class="text-brand-steel text-sm leading-relaxed mb-5 line-clamp-2">
                        Rahasia di balik kilau wetlook yang tahan lama ada pada proses pengeringan dan material clear coat yang digunakan...
                    </p>
                    <div class="flex items-center gap-2 text-brand-navy font-black text-[10px] uppercase tracking-wider group-hover:gap-4 transition-all">
                        Baca Selengkapnya <i class="fa-solid fa-arrow-right-long text-brand-gold"></i>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group cursor-pointer">
                <div class="relative h-64 mb-6 overflow-hidden rounded-2xl shadow-sm bg-brand-navy/10 border border-ui-border">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-steel/20 to-brand-navy flex items-center justify-center group-hover:scale-110 transition-transform duration-500 text-white/10">
                        <i class="fa-solid fa-shield-halved text-7xl"></i>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-brand-navy text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-widest">Coating</span>
                    </div>
                </div>
                <div class="px-1">
                    <p class="text-brand-gold text-[10px] font-black uppercase tracking-widest mb-3">Mei 08, 2026</p>
                    <h4 class="text-xl font-extrabold text-brand-navy group-hover:text-brand-gold transition-colors mb-3 leading-snug">
                        Nano Ceramic vs Wax: Mana yang Paling Melindungi?
                    </h4>
                    <p class="text-brand-steel text-sm leading-relaxed mb-5 line-clamp-2">
                        Jangan sampai salah pilih perlindungan. Simak perbandingan daya tahan dan kilap antara nano ceramic dengan wax konvensional...
                    </p>
                    <div class="flex items-center gap-2 text-brand-navy font-black text-[10px] uppercase tracking-wider group-hover:gap-4 transition-all">
                        Baca Selengkapnya <i class="fa-solid fa-arrow-right-long text-brand-gold"></i>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group cursor-pointer">
                <div class="relative h-64 mb-6 overflow-hidden rounded-2xl shadow-sm bg-brand-navy/10 border border-ui-border">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-gold/20 to-brand-navy flex items-center justify-center group-hover:scale-110 transition-transform duration-500 text-white/10">
                        <i class="fa-solid fa-screwdriver-wrench text-7xl"></i>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-brand-navy text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-widest">Maintenance</span>
                    </div>
                </div>
                <div class="px-1">
                    <p class="text-brand-gold text-[10px] font-black uppercase tracking-widest mb-3">Mei 05, 2026</p>
                    <h4 class="text-xl font-extrabold text-brand-navy group-hover:text-brand-gold transition-colors mb-3 leading-snug">
                        5 Kebiasaan Sepele yang Merusak Cat Mobil Anda
                    </h4>
                    <p class="text-brand-steel text-sm leading-relaxed mb-5 line-clamp-2">
                        Mencuci di bawah terik matahari atau menggunakan lap sembarangan bisa berakibat fatal bagi jangka panjang body mobil...
                    </p>
                    <div class="flex items-center gap-2 text-brand-navy font-black text-[10px] uppercase tracking-wider group-hover:gap-4 transition-all">
                        Baca Selengkapnya <i class="fa-solid fa-arrow-right-long text-brand-gold"></i>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="mt-20 flex justify-center items-center gap-4">
            <button class="w-12 h-12 rounded-xl border border-ui-border flex items-center justify-center text-brand-navy hover:bg-brand-navy hover:text-white transition-all">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <span class="text-sm font-black text-brand-navy px-4">1 / 10</span>
            <button class="w-12 h-12 rounded-xl border border-ui-border flex items-center justify-center text-brand-navy hover:bg-brand-navy hover:text-white transition-all">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

    </main>

    <!-- Footer CTA -->
    <section class="py-20 bg-white border-t border-ui-border">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-brand-navy mb-4 italic">Punya Masalah dengan Body Mobil?</h2>
            <p class="text-brand-steel mb-8">Langsung mampir ke workshop kami di Cikande untuk konsultasi fisik gratis.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 font-black uppercase tracking-widest text-[10px]">
                <a href="#" class="px-10 py-4 bg-brand-navy text-white rounded-xl shadow-lg hover:bg-brand-gold transition-all">Hubungi Admin</a>
                <a href="#" class="px-10 py-4 bg-ui-main text-brand-navy rounded-xl border border-ui-border hover:bg-brand-silver/20 transition-all">Lokasi Bengkel</a>
            </div>
        </div>
    </section>
</x-layouts.blog>